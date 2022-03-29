const MainTextInput = () => {
  return (
    <>
      <div className="relative my-2">
        <input
          type="text"
          id="on-error-email"
          className="ring-gray-200 ring-1 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent"
          name="email"
          autoComplete={"off"}
          placeholder="Cari sesuatu"
        />
        <svg
          width="20"
          height="20"
          className={"absolute right-2.5 bottom-2.5"}
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle
            cx="10"
            cy="10"
            r="7"
            stroke="#717375"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
          />
          <path
            d="M21 21L15 15"
            stroke="#717375"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
          />
        </svg>
      </div>
    </>
  );
};
export default MainTextInput;
