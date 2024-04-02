import PageLayout from "@/components/Layouts/PageLayout";
import Content from "@/components/page/LeatestJob/Content";
import React from "react";

const Page = ({ params }: { params: { id: string } }) => {
  const { id } = params;
  return (
    <PageLayout>
      <Content ContentId={id} />
    </PageLayout>
  );
};

export default Page;
