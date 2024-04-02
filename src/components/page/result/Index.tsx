import Card from '@/components/global/molecules/Card'
import Link from 'next/link'
import React from 'react'

const HeroResult = () => {
  return (
    <div className="hide-scrollbar max-h-screen overflow-y-auto">
          <header className="sticky top-0 z-10 h-8 bg-primary_bg_indigo text-white flex items-center justify-center">
            Results
          </header>
          <div className="flex flex-col gap-2 mt-2">
          <Link href="/results/113" target="_blank">
            <Card
              title="Title"
              state="Jharkhand"
              startDate="01-02-2024"
              endDate="01-03-2024"
            />
          </Link>
          </div>
        </div>
  )
}

export default HeroResult