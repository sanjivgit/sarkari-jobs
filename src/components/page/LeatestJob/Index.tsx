import Card from "@/components/global/molecules/Card";
import Link from "next/link";
import React from "react";

const HeroLatestJob = () => {
  return (
    <div>
      <div className="hide-scrollbar max-h-screen overflow-y-auto">
        <header className="sticky top-0 z-10 h-8 bg-primary_bg_indigo text-white flex items-center justify-center">
          Latest Jobs
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
    </div>
  );
};

export default HeroLatestJob;
