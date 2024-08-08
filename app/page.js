import Header from "./_components/global/Header/Header";

export default function Home() {
  return (
    <>
      <Header />
      <main className="overflow-hidden">
        <section className="bg-princetonorange h-screen w-screen p-8">
          <h1 className="font-gibson font-bold text-[12vw] text-papayawhip uppercase h-32 leading-[0.8]">
            Rikki Soriano
          </h1>
          <h2 className="font-bold text-papayawhip text-[3vw]">
            Front-End Developer/Graphic Designer/User Experience Designer
          </h2>
        </section>
      </main>
    </>
  );
}
