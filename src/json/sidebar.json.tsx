import React from "react";
import Image from "next/image";
import { SidebarLinksProps } from "@/utils/types/types";
import mastersLogo from "@/assets/icons/sidebar/masters.svg";
import houseIcons from "@/assets/svg/house_icons.svg"

export const sidebarLinks: SidebarLinksProps = {
  modules: [
    {
      moduleName: "Home",
      icon: (
        <Image
          src={houseIcons}
          alt="home"
          width={25}
          height={25}
        />
      ),
      path: "/home",
    },
    {
      moduleName: "Latest Jobs",
      icon: (
        <Image
          src={mastersLogo}
          alt="latest-jobs"
          width={25}
          height={25}
        />
      ),
      path: "/latest-jobs",
      // subModules: [
      //   {
      //     moduleName: "Receipt Register",
      //     path: "/revenue-collection/receipt-register",
      //   },
      // ],
    },
    {
      moduleName: "Results",
      icon: (
        <Image
          src={mastersLogo}
          alt="results"
          width={25}
          height={25}
        />
      ),
      path: "/results",
    },
    {
      moduleName: "Admit Card",
      icon: (
        <Image
          src={mastersLogo}
          alt="admit-cards"
          width={25}
          height={25}
        />
      ),
      path: "/admit-cards"
    },
  ],
};
