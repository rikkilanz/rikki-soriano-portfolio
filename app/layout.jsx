import { Inter_Tight } from "next/font/google";
import "./globals.css";
import Header from "./_components/global/Header/Header";

const inter = Inter_Tight({ subsets: ["latin"] });

export const metadata = {
  title: "Rikki Soriano, Front-End Developer & UX Designer | Portfolio",
  description:
    "Hello! My name is Rikki Soriano, a Front-End Developer/UX Designer based in Vancouver, Canada. I invite you to come check my design and development works in this portfolio!",
};

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <head>
        <link
          rel="stylesheet"
          href="https://use.typekit.net/grh8kqz.css"
        ></link>
      </head>
      <Header />
      <body className={`${inter.className} bg-princetonorange`}>
        {children}
      </body>
    </html>
  );
}
