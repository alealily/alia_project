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
                    <th scope="col" class="px-6 py-3 text-center bg-gray-300" style="font-size: 18px; font-family: cambria;">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3 text-center bg-gray-300" style="font-size: 18px; font-family: cambria;">
                        Nama Produk
                    </th>
                    <th scope="col" class="px-6 py-3 text-center bg-gray-300" style="font-size: 18px; font-family: cambria;">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3 text-center bg-gray-300" style="font-size: 18px; font-family: cambria;">
                        Harga
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item )
                <tr>
                    <td scope="row" class="px-6 py-4 bg-gray-100" >
                        {{ $index + 1 }}
                    </td>
                    <td class="px-9 py-4 bg-gray-100" style="font-family: sans-serif;"> 
                        {{ $item }} 
                    </td>
                    <td class="px-6 py-4 bg-gray-100" style="font-family: sans-serif;"> 
                        {{ $desc [$index] }} 
                    </td>
                    <td class="px-6 py-4 bg-gray-100" style="font-family: sans-serif;"> 
                        {{ $harga [$index] }} 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>