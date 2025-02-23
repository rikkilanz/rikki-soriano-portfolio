import Link from "next/link";
const contact = [
  {
    name: "GitHub",
    image: (
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="75"
        height="75"
        viewBox="0 0 24 24"
        fill="#FEA634"
      >
        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
      </svg>
    ),
    href: "https://github.com/rikkilanz",
  },
  {
    name: "LinkedIn",
    image: (
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="75"
        height="75"
        fill="#FEA634"
        viewBox="0 0 24 24"
      >
        <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
      </svg>
    ),
    href: "https://www.linkedin.com/in/rikkisoriano/",
  },
  {
    name: "Resume",
    image: (
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill-rule="evenodd"
        clip-rule="evenodd"
        width="75"
        height="75"
        fill="#FEA634"
        viewBox="0 0 24 24"
      >
        <path d="M3 24h19v-23h-1v22h-18v1zm17-24h-18v22h18v-22zm-1 1h-16v20h16v-20zm-2 16h-12v1h12v-1zm0-3h-12v1h12v-1zm0-3h-12v1h12v-1zm-7.348-3.863l.948.3c-.145.529-.387.922-.725 1.178-.338.257-.767.385-1.287.385-.643 0-1.171-.22-1.585-.659-.414-.439-.621-1.04-.621-1.802 0-.806.208-1.432.624-1.878.416-.446.963-.669 1.642-.669.592 0 1.073.175 1.443.525.221.207.386.505.496.892l-.968.231c-.057-.251-.177-.449-.358-.594-.182-.146-.403-.218-.663-.218-.359 0-.65.129-.874.386-.223.258-.335.675-.335 1.252 0 .613.11 1.049.331 1.308.22.26.506.39.858.39.26 0 .484-.082.671-.248.187-.165.322-.425.403-.779zm3.023 1.78l-1.731-4.842h1.06l1.226 3.584 1.186-3.584h1.037l-1.734 4.842h-1.044z" />
      </svg>
    ),
    href: "https://www.linkedin.com/in/rikkisoriano/",
  },
];

export default function ContactPage() {
  return (
    <section className="p-8 text-papayawhip">
      <div>
        <h1 className="font-gibson font-bold text-[11.3vw] sm:text-[11.5vw] md:text-[12vw] lg:text-[12.3vw] 2xl:text-[12.7vw] uppercase leading-[0.75] ml-[-0.3vw] mt-8">
          Get in touch with me!
        </h1>
      </div>
      <h2 className="font-bold text-[16px] md:text-[2.6vw] leading-[1]">
        Feel free to send me an email at{" "}
        <a href="" className="underline hover:font-black">
          rikkilanz@gmail.com
        </a>{" "}
        to chat about my work/website/what kind of music I listen to or connect
        with me at:
      </h2>
      <div className="flex flex-wrap mt-4 md:mt-2 gap-4">
        {contact.map((item, index) => (
          <Link
            key={index}
            className="p-6 bg-papayawhip rounded-md flex flex-row items-center font-md text-black hover:bg-babypowder group grow md:grow-0 basis-full md:basis-0 relative active:bottom-[-6px] border-2 border-black md:border-0 font-medium hover:font-bold"
            href={item.href}
            target="_blank"
          >
            <span className="group-hover:scale-105 transition-all ">
              {item.image}
            </span>
            <p className="md:hidden text-center mt-2 ml-8 text-orangepeel text-2xl uppercase">
              {item.name}
            </p>
            <div className="md:hidden bg-black absolute w-full h-full top-2 rounded-md left-0 right-0 border-4 border-black z-[-1]" />
          </Link>
        ))}
      </div>
    </section>
  );
}
