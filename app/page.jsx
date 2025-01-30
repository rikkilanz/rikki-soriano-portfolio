import Header from "./_components/global/Header/Header";
import ProjectGallery from "./_components/global/ProjectGallery/ProjectGallery";

export default function Home() {
  return (
    <>
      <main className="text-papayawhip">
        <section className="p-8">
          <div>
            <h1 className="font-gibson font-bold text-[11.3vw] sm:text-[11.5vw] md:text-[12vw] lg:text-[12.3vw] 2xl:text-[12.7vw] uppercase leading-[0.5] ml-[-0.3vw] mt-8">
              Rikki Soriano
            </h1>
          </div>
          <h2 className="font-bold text-[2.6vw] mt-2 md:mt-4">
            /
            <span className="hover:font-black transition-all cursor-default hover:px-2">
              Front-End Developer
            </span>
            /
            <span className="hover:font-black transition-all cursor-default hover:px-2">
              Graphic Designer
            </span>
            /
            <span className="hover:font-black transition-all cursor-default hover:px-2">
              User Experience Designer
            </span>
            /
          </h2>
        </section>
        <section>
          <ProjectGallery />
        </section>
        <section className="h-[100px]">
          <span className="sr-only">for navigation spacing</span>
        </section>
      </main>
    </>
  );
}
