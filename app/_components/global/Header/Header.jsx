import Link from "next/link";
import Image from "next/image";

export default function Header() {
  return (
    <header className="bg-transparent absolute bottom-0 left-0 right-0 min-h-[100px] px-8 flex z-10">
      <div className="flex justify-between items-center flex-grow uppercase text-babypowder text-lg font-medium">
        <nav className="flex gap-2">
          <Link href="/work">Work</Link>
          <Link href="/about">About</Link>
        </nav>
        <Link href="/">
          <Image
            src="/assets/brand-logo/rikki-soriano-logo-icon-white.svg"
            height={0}
            width={0}
            className="w-8"
          />
        </Link>
        <Link href="/contact">
          <div className="relative">
            <div className="bg-babypowder text-princetonorange px-8 py-3 rounded-md border-2 border-black font-extrabold relative active:bottom-[-6px]">
              Contact Me
            </div>
            <div className="bg-black absolute w-full h-full top-2 rounded-md left-0 right-0 border-4 border-black z-[-1]" />
          </div>
        </Link>
      </div>
    </header>
  );
}
