import "@/styles/globals.css";
import type { AppProps } from "next/app";
import Link from "next/link"

export default function App({ Component, pageProps }: AppProps) {
  return (
    <>
      <div className="nav">
        <div>
          <Link href="/">
            Xaitsnoo Community Dictionary Project
          </Link>
        </div>
        <div>
          <Link href="/xaitsnoo">
            About Xaitsnoo
          </Link>
        </div>
        <div>
          <Link href="/about">
            About the Dictionary
          </Link>
        </div>
      </div>
      <main>
        <Component {...pageProps} />
      </main>
      <div>
        <Link href="https://github.com/Xaitsnue-Community-Dictionary-Project/xaitsnue">Open source</Link>, a project housed in the <Link href="https://lx.berkeley.edu/">UC Berkeley Department of Linguistics</Link>.
      </div>
    </>
  );
}
