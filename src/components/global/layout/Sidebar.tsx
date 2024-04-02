"use client";

import React, { useEffect, useState } from "react";
import Image from "next/image";
import Link from "next/link";
import { sidebarLinks } from "@/json/sidebar.json";
import { usePathname, useRouter } from "next/navigation";
import { useSelector } from "react-redux";
import defaultProfilePic from "@/assets/icons/profile2.png";

interface SideBarProps extends React.HTMLAttributes<HTMLDivElement> {
  className: string;
}

const Sidebar: React.FC<SideBarProps> = (props) => {
  const pathName = usePathname();
  const router = useRouter();
  const [data, setData] = useState<string | null>();
  const userData = useSelector((state: any) => state.user.user?.userDetails);
  const [user, setUser] = useState<any>();

  useEffect(() => {
    setData(localStorage.getItem("openPage"));
    setUser(userData);
  }, []);
  const handleClick = (moduleName: string) => {
    localStorage.setItem("openPage", moduleName);
  };

  const handleRedirect = (url: string) => {
    router.push(url);
  };

  return (
    <div style={{ height: "calc(100vh - 3.5rem)" }} {...props}>
      <section className="mt-3">
        {sidebarLinks.modules?.map((link, index: number) => {
          return (
            <div key={index}>
              <ul className="mb-3 p-0">
                {link.subModules ? (
                  <li>
                    <details open={data === link?.moduleName} className="mr-3">
                      <summary
                        className={`${
                          pathName.startsWith(link.path)
                            ? " bg-primary_bg_indigo"
                            : " bg-transparent text-zinc-600"
                        } whitespace-nowrap flex items-center ml-2 text-[0.9375rem] p-1 pr-4 hover:bg-primary_bg_indigo hover:text-white font-semibold text-white`}
                      >
                        <i className="w-8 mr-2 rounded-md p-1.5 bg-primary_bg_indigo ">
                          {link.icon}
                        </i>
                        {link.moduleName}
                      </summary>
                      <ul>
                        {link.subModules?.map((sub, i: number) => (
                          <li
                            onClick={() => handleClick(sub.moduleName)}
                            key={i}
                            className={`mt-3 ml-5`}
                          >
                            <Link
                              className={`text-[0.9375rem] p-2 ${
                                pathName === link.path
                                  ? "text-black font-medium bg-primary_bg_indigo bg-opacity-20"
                                  : "text-primary"
                              } `}
                              href={link.path}
                            >
                              {link.moduleName}
                            </Link>
                          </li>
                        ))}
                      </ul>
                    </details>
                  </li>
                ) : (
                  <Link
                    href={link.path}
                  >
                    <h2
                      className={`${
                        pathName.startsWith(link.path)
                          ? " bg-primary_bg_indigo"
                          : " bg-transparent text-zinc-600"
                      } whitespace-nowrap ml-2 mr-2 text-[0.9375rem] flex items-center p-1 pr-4 hover:bg-primary_bg_indigo hover:text-white font-semibold text-white`}
                    >
                      <i className="w-8 mr-2 rounded-md p-1.5 bg-primary_bg_indigo">
                        {link.icon}
                      </i>
                      {link.moduleName}
                    </h2>
                  </Link>
                )}
              </ul>
            </div>
          );
        })}
      </section>
    </div>
  );
};

export default Sidebar;
