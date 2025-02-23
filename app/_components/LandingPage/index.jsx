import Image from "next/image";

export default function LandingPage() {
  return (
    <section className="w-screen h-screen flex justify-center items-center flex-col">
      <Image
        alt="Rikki Soriano Logo"
        src="/assets/brand-logo/rikkisoriano-logo-icon-white.svg"
        height={0}
        width={0}
        className="w-12"
      />
      <div className="mt-8">
        <h1 className="font-gibson font-bold uppercase leading-[0.5] text-4xl">
          Rikki Soriano
        </h1>
      </div>
      <h2 className="font-bold text-[px] mt-2 md:mt-4 w-[500px] text-center">
        <span className="">
          Hi! I'm sorry but you came at the wrong time. I'm currently working on
          my portfolio, but if you want to come talk leave a message at{" "}
          <a href="mailto:rikkilanz@gmail.com">rikkilanz@gmail.com</a>
        </span>
      </h2>
    </section>
  );
}
