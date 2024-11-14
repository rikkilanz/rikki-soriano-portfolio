import Image from "next/image";

export default function ProjectGallery() {
  return (
    <div>
      <ul className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 h-[48em] md:h-[25em] px-8">
        <li className="col-span-1 border-papayawhip border-2 rounded-tl-md border-r-0 border-b-0 lg:border-b-2 lg:rounded-bl-md relative overflow-hidden">
          <Image
            src="/assets/projects/test-thumbnail.jpg"
            width={500}
            height={500}
            className="object-none h-full"
          />
        </li>
        <li className="col-span-1 border-papayawhip border-2 md:border-r-0 rounded-tr-md border-b-0 md:rounded-t-none lg:border-b-2"></li>
        <li className="col-span-1 border-papayawhip border-2 border-r-0 border-b-0 md:border-r-2 md:rounded-tr-md lg:border-b-2 lg:rounded-t-none lg:border-r-0"></li>
        <li className="col-span-1 border-papayawhip border-2 lg:border-r-0 border-b-0 md:border-b-2 md:rounded-bl-md md:border-r-0 lg:rounded-b-none"></li>
        <li className="col-span-1 border-papayawhip border-2 border-r-0 rounded-bl-md md:rounded-b-none"></li>
        <li className="col-span-1 border-papayawhip border-2 rounded-br-md lg:rounded-tr-md"></li>
      </ul>
    </div>
  );
}
