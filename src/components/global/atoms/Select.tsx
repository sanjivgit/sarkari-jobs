import { useQuery } from "react-query";
import React from "react";
import axios from "@/lib/axiosConfig";

/**
 * | Author- Sanjiv Kumar
 * | Created On- 02-02-2024
 * | Created for- Select Input Field
 * | Status- done
 */

interface SelectProps {
  label: string;
  name: string;
  placeholder?: string;
  value?: number | string;
  api?: string;
  error?: string | undefined;
  type?: string;
  touched?: boolean | undefined;
  readonly?: boolean;
  className?: string;
  visibility?: boolean;
  required?: boolean | false;
  handler?: (id: number | string) => void;
  onChange?: (e: React.ChangeEvent<HTMLSelectElement>) => void;
  onBlur?: (e: React.FocusEvent<HTMLSelectElement>) => void;
}

interface Select {
  id: number;
  name?: string;
  type?: string;
  code?: string;
  description?: string;
  ulbs?: string;
}

const Select: React.FC<SelectProps> = (props) => {

  const fetchData = async (): Promise<Select[]> => {
    const res = await axios({
      url: props.api,
      method: "GET",
    });
    
    return res.data?.data;
  };

  const { data: dataList = [], isError: dataError } = useQuery({
    queryKey: [props.name],
    queryFn: fetchData,
  });

  if (dataError) {
    throw new Error("Fatal Error!");
  }

  return (
    <>
      <div className="flex flex-col gap-1">
        <label className="text-secondary text-sm" >
          {props.label}
          {props.required? (<span className="text-red-600 pl-2">*</span>):("")}
        </label>
        <select
          disabled={props.readonly}
          onChange={props.onChange}
          onBlur={props.onBlur}
          value={props.value}
          className={`text-primary h-[40px] pl-3 rounded-lg border bg-transparent border-zinc-400 ${props.className}`}
          name={props.name}
        >
          <option selected value="">
            {props.placeholder}
          </option>
          {dataList.length > 0 &&
            dataList.map((d: Select) => (
              <option
                key={d?.id}
                value={d?.id}
              >
                {d?.name}
              </option>
            ))}
        </select>

        {props.touched && props.error && (
          <div className="text-red-500">{props.error}</div>
        )}
      </div>
    </>
  );
};

export default Select;
