import { useRouter } from 'next/router';
import Meta from "@/components/meta";

export default function Word() {
  const router = useRouter();
  const { word } = router.query;
  return (
    <>
      <Meta title={"About Xaitsnoo"} />
      Here we can write about Xaitsnoo.
    </>
  );
}
