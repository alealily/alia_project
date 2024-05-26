<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>List Produk</title>
</head>

<body>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-900 uppercase bg-gray-70 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center bg-gray-300"
                        style="font-size: 18px; font-family: cambria;">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3 text-center bg-gray-300"
                        style="font-size: 17px; font-family: cambria;">
                        Nama Produk
                    </th>
                    <th scope="col" class="px-6 py-3 text-center bg-gray-300"
                        style="font-size: 17px; font-family: cambria;">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3 text-center bg-gray-300"
                        style="font-size: 17px; font-family: cambria;">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3 text-center bg-gray-300"
                        style="font-size: 17px; font-family: cambria;">
                        Action
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($nama as $index => $item )
                <tr>
                    <td scope="row" class="px-6 py-4 bg-gray-100">
                        {{ $index + 1 }}
                    </td>
                    <td class="px-9 py-4 bg-gray-100" style="font-family: sans-serif;">
                        {{ $item }}
                    </td>
                    <td class="px-6 py-4 bg-gray-100" style="font-family: sans-serif;">
                        {{ $desc [$index] }}
                    </td>
                    <td class="px-6 py-4 bg-gray-100 text-center" style="font-family: sans-serif;">
                        {{ $harga [$index] }}
                    </td>
                    <td class="text-center bg-gray-100">
                        <form action="{{ route('produk.delete', $id[$index]) }}" method="POST">
                            @csrf
                            @method ('DELETE')
                            <button class="font-medium text-red-600 dark:text-red-500 hover:underline" style="font-weight: sans-serif;" type="submit" onclick="return confirm('Are you sure want to delete {{ $item }}?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div>
        <h1 class="text-center font-bold mt-5 mb-6" style="font-size: 25px; font-family: cambria;">Input Produk</h1>
    </div>

    <form class="max-w-xs mx-auto " method="POST" action="{{ route('produk.simpan') }}">
        @csrf
        <div class="mb-5">
            <label for="nama" class="form-control block mb-2 text-sm font-semibold text-gray-900 dark:text-white"
                style="font-size: 15px; font-family: cambria;">Nama
                Produk</label>
            <input id="nama" name="nama" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <div class="mb-5">
            <label for="Deskripsi" class="form-control block mb-2 text-sm font-semibold text-gray-900 dark:text-white"
                style="font-size: 15px; font-family: cambria;">Deskripsi
                Produk</label>
            <textarea type="deskripsi" id="deskripsi" name="deskripsi" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 
                text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
                dark:focus:border-blue-500 dark:shadow-sm-light"></textarea>
        </div>
        <div class="mb-5">
            <label for="harga" class="form-control block mb-2 text-sm font-semibold text-gray-900 dark:text-white"
                style="font-size: 15px; font-family: cambria;">Harga</label>
            <input type="number" id="harga" name="harga" class=" form-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 
                text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
                dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <button type="submit" class="text-white mb-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium 
                rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx">Simpan</button>
    </form>
    </div>

</body>

</html>