'use client'

import Card from "@/components/global/molecules/Card";
import Link from "next/link";
import React from "react";
import axios from "@/lib/axiosConfig";
import { useQuery } from "react-query";
import { FINANCE_URL } from "@/utils/api/urls";

const HeroHome = () => {
  const fetchData = async (endpoint: string) => {
    try {
      const res = await axios({
        url: endpoint,
        method: "GET",
      });

      if (!res.status) throw Error("Something Went Wrong!!");

      return res.data;
    } catch (error) {
      console.log(error);
    }
  };

  const useForApiCall = (endpoint: string) => {
    return useQuery([endpoint], () => fetchData(endpoint));
  };

  ///// Getting Leated Job list
  const { isFetching: isLtJobFetching, data: leateatJobs = [] } = useForApiCall(
    `${FINANCE_URL.LEATEST_JOB.get}`
  );

  ///// Getting Admit Card list
  const { isFetching: isAtCardFetching, data: admitCards = [] } = useForApiCall(
    `${FINANCE_URL.ADMIT_CARD.get}`
  );

  ///// Getting Result list
  const { isFetching: isRltFetching, data: results = [] } = useForApiCall(
    `${FINANCE_URL.RESULT.get}`
  );

  return (
    <div>
      <div className="grid gap-2 grid-cols-2 max-md:grid-cols-1">
        <div className="hide-scrollbar max-h-screen overflow-y-auto">
          <header className="sticky top-0 z-10 h-8 bg-primary_bg_indigo text-white flex items-center justify-center">
            Leatest Jobs
          </header>
          <div className="flex flex-col gap-2 mt-2">
            {leateatJobs.map((item: any, index: number) => (
              <React.Fragment key={index}>
                <Link href="/latest-jobs/10" target="_blank">
                  <Card
                    title={item?.title}
                    state="Jharkhand"
                    startDate={item?.start_date}
                    endDate={item?.end_date}
                  />
                </Link>
              </React.Fragment>
            ))}
          </div>
        </div>
        <div className="hide-scrollbar max-h-screen overflow-y-auto">
          <header className="sticky top-0 z-10 h-8 bg-primary_bg_indigo text-white flex items-center justify-center">
            Admit Cards
          </header>
          <div className="flex flex-col gap-2 mt-2">
            <Link href="/admit-cards/10" target="_blank">
              <Card
                title="Title"
                state="Jharkhand"
                startDate="01-02-2024"
                endDate="01-03-2024"
              />
            </Link>
          </div>
        </div>
        <div className="hide-scrollbar max-h-screen overflow-y-auto">
          <header className="sticky top-0 z-10 h-8 bg-primary_bg_indigo text-white flex items-center justify-center">
            Results
          </header>
          <div className="flex flex-col gap-2 mt-2">
            <Link href="/results/1001" target="_blank">
              <Card
                title="Title"
                state="Jharkhand"
                startDate="01-02-2024"
                endDate="01-03-2024"
              />
            </Link>
          </div>
        </div>
      </div>
    </div>
  );
};

export default HeroHome;
