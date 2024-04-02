import Card from "@/components/global/molecules/Card";
import Link from "next/link";
import React from "react";

const HeroHome = () => {
  return (
    <div>
      <div className="grid gap-2 grid-cols-2 max-md:grid-cols-1">
        <div className="hide-scrollbar max-h-screen overflow-y-auto">
          <header className="sticky top-0 z-10 h-8 bg-primary_bg_indigo text-white flex items-center justify-center">
            Leatest Jobs
          </header>
          <div className="flex flex-col gap-2 mt-2">
          <Link href="/latest-jobs/10" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/11" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/12" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/103" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/104" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/105" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/106" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/107" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/108" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/109" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/111" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/112" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/113" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          <Link href="/latest-jobs/114" target="_blank">
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
