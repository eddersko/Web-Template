import Head from "next/head";

export default function Meta({ title }: { title?: string }) {
  return (
    <Head>
      <title>{`${title ? `${title} | ` : ""}Xaitsnoo Community Dictionary Project`}</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
    </Head>
  );
}
