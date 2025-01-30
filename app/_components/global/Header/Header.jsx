"use client";

import { useState } from "react";
import Link from "next/link";
import Image from "next/image";

export default function Header() {
  const [isNavOpen, setIsNavOpen] = useState(false);
  return (
    <header className="bg-transparent fixed bottom-0 left-0 right-0 min-h-[100px] flex z-10">
      {/* Mobile Navigation */}
      <div className="sm:hidden flex flex-col w-full uppercase text-lg font-medium">
        <div className=" flex justify-between items-center flex-grow px-8 py-4">
          <Link href="/">
            <Image
              src="/assets/brand-logo/rikkisoriano-logo-horizontal-orange.svg"
              height={0}
              width={0}
              className="h-12 w-auto"
            />
          </Link>
          <button
            className="relative"
            onClick={() => {
              setIsNavOpen(!isNavOpen);
            }}
          >
            <Image
              src="/assets/icons/triangle-icon.svg"
              height={0}
              width={0}
              className={`${
                isNavOpen ? "rotate-[-180deg]" : ""
              } h-8 w-auto active:bottom-[-4px] relative transition-all duration-300 ease-in-out`}
            />
            <Image
              src="/assets/icons/triangle-icon-back.svg"
              height={0}
              width={0}
              className={`${
                isNavOpen ? "rotate-[-180deg]" : ""
              } h-8 w-auto absolute top-1 z-[-1] transition-all duration-300 ease-in-out`}
            />
          </button>
        </div>
        {isNavOpen && (
          <div className="py-8 bg-babypowder">
            <nav className="flex flex-col">
              <Link
                href="/work"
                className="hover:font-extrabold px-8 py-4 transition-all duration-300"
              >
                Work
              </Link>
              <Link
                href="/about"
                className="hover:font-extrabold px-8 py-4 transition-all duration-300"
              >
                About
              </Link>
            </nav>
            <div className="px-8 py-4">
              <Link href="/contact">
                <div className="relative">
                  <div className="bg-babypowder text-papayawhip px-8 py-3 rounded-md border-2 border-black font-extrabold relative active:bottom-[-6px] text-center z-[2]">
                    Contact Me
                  </div>
                  <div className="bg-black absolute w-full h-full top-2 rounded-md left-0 right-0 border-4 border-black z-[1]" />
                </div>
              </Link>
            </div>
          </div>
        )}
      </div>
      {/* Desktop Navigation */}
      <div className="hidden sm:flex justify-between items-center flex-grow uppercase text-papayawhip text-lg font-medium px-8">
        <nav className="flex gap-4">
          <Link href="/work" className="hover:font-extrabold transition-all">
            Work
          </Link>
          <Link href="/about" className="hover:font-extrabold transition-all">
            About
          </Link>
        </nav>
        <Link href="/">
          <Image
            src="/assets/brand-logo/rikkisoriano-logo-icon-white.svg"
            height={0}
            width={0}
            className="w-8"
          />
        </Link>
        <Link href="/contact">
          <div className="relative">
            <div className="bg-babypowder text-princetonorange px-8 py-3 rounded-md border-2 border-black font-extrabold relative active:bottom-[-6px] text-center">
              Contact Me
            </div>
            <div className="bg-black absolute w-full h-full top-2 rounded-md left-0 right-0 border-4 border-black z-[-1]" />
          </div>
        </Link>
      </div>
    </header>
  );
}
