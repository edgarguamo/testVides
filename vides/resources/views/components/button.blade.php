<button {{ $attributes->merge(['type' => 'submit', 'class' => 'iw-full lg:px-14 md:px-7 py-3 mt-6 font-medium tracking-widest text-white uppercase bg-blue-500 shadow-lg focus:outline-none hover:bg-blue-900 hover:shadow-none']) }}>
    {{ $slot }}
</button>
