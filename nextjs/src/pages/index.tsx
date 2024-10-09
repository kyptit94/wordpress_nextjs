import Layout from "../components/layout";
import RegisterCard from "@/components/home/registerCard";
import InfoCard from "@/components/home/infoCard";

export default function Home() {
  return (
    <Layout>
        <>
          <RegisterCard />
          <div className="main">
            <InfoCard />
          </div>
        </>
    </Layout>
  );
}
