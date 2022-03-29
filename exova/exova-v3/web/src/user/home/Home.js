import Layout from "../../components/layouts/Layout";
import MainCategory from "../../components/categories/MainCategory";
import MainTextInput from "../../components/forms/MainTextInput";

const Home = () => {
  return (
    <Layout>
      <div className={"md:ml-32 mx-4 md:mt-20 mt-4"}>
        <div className={"grid grid-cols-1 md:grid-cols-5 md:gap-2"}>
          <div className={"block md:hidden"}>
            <img
              className={"h-full w-full object-cover"}
              alt={"Header Banner"}
              src={
                "https://www.exova.id/storage/users/231/products/61f3fafdc983c/1280/1643380250-54.jpg"
              }
            />
          </div>
          <div className={"mt-8 md:mt-24 col-span-2"}>
            <h1 className={"font-bold text-3xl md:text-4xl leading-snug"}>
              Take your <span className={"text-blue-500"}>moment</span> and{" "}
              <span className={"text-blue-500"}>vacation</span> in Bali!
            </h1>
            <h1 className={"font-normal text-md text-gray-500 mt-3"}>
              Dokumentasikan liburan, kegiatan, dan acaramu bersama kami.
            </h1>
            <div className={"hidden md:block grid grid-cols-2 gap-4 my-14"}>
              <div>Jasa</div>
              <div>Freelancer</div>
            </div>
            <div className={"mt-8 md:mt-0"}>
              <h1 className={"font-medium text-md mt-3"}>
                Cari nama kegiatan atau freelancer
              </h1>
              <MainTextInput />
              <h1 className={"font-medium text-xs text-gray-500 mt-3"}>
                Pencarian terpopuler: Pernikahan, Liburan, Metatah
              </h1>
            </div>
            <div
              className={
                "md:hidden block grid grid-cols-1 md:grid-cols-2 gap-4 mt-14"
              }
            >
              <div>Jasa</div>
              <div>Freelancer</div>
            </div>
          </div>
          <div className={"md:col-span-3 hidden md:block"}>
            <img
              className={"h-full object-cover"}
              alt={"Header Banner"}
              src={
                "https://www.exova.id/storage/users/231/products/61f3fafdc983c/1280/1643380250-54.jpg"
              }
            />
          </div>
        </div>
      </div>
      <div className={"md:container md:mx-auto mx-4"}>
        <div className={"md:mt-32 mt-20"}>
          <h1 className={"font-medium text-3xl"}>Kategori Exova</h1>
          <h1 className={"font-medium text-md text-gray-500 mt-2"}>
            Beberapa kategori dari Exova yang bisa kamu pilih!
          </h1>
          <div className={"grid grid-cols-2 md:grid-cols-4 gap-4 mt-8"}>
            <MainCategory />
            <MainCategory />
            <MainCategory />
            <MainCategory />
          </div>
        </div>
      </div>
    </Layout>
  );
};
export default Home;
