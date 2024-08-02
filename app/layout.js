import { Inter } from "next/font/google";
import "./globals.css";

const inter = Inter({ subsets: ["latin"] });

export const metadata = {
  title: "Rikki Soriano, Front-End Developer & UX Designer | Portfolio",
  description:
    "Hello! My name is Rikki Soriano, a Front-End Developer/UX Designer based in Vancouver, Canada. I invite you to come check my design and development works in this portfolio!",
};

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <link rel="stylesheet" href="https://use.typekit.net/grh8kqz.css"></link>
      <body className={`${inter.className} bg-babypowder`}>{children}</body>
    </html>
  );
}
