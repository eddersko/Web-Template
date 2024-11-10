import { useRouter } from 'next/router';
import Meta from "@/components/meta";

export default function Word() {
  const router = useRouter();
  const { word } = router.query;
  return (
    <>
      <Meta title={"About the Dictionary"} />
      Here we can write about the dictionary.
    </>
  );
}
