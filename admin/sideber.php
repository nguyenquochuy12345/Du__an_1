<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADMIN</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
* {
margin: 0;
padding: 0px;
box-sizing: border-box;
font-family: 'Roboto', sans-serif;
}
</style>
</head>
<body>
    <div>
    <!-- Sidebar -->
    <div class="fixed grid  top-0 left-0 w-14 hover:w-64 md:w-64 bg-white h-full text-black transition-all duration-300 border border-r-[1px] z-10 shadow-2xl">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
            <ul class="flex flex-col py-4 space-y-1 mt-14">
                <li>
                    <a href="index.php?action=home" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-black text-white-600 hover:text-white-800 hover:text-white pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-house"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Trang Chủ</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=quanlydanhmuc" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-black text-white-600 hover:text-white-800 hover:text-white pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-bars-progress"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Danh Mục</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=quanlysanpham" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-black text-white-600 hover:text-white-800   hover:text-white pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-box-open"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Sản Phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=quanlytaikhoan" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-black text-white-600 hover:text-white-800   hover:text-white pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Tài Khoản</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=listtaikhoan" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-black text-white-600 hover:text-white-800   hover:text-white pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Nhân Viên</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=quanlybinhluan" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-black text-white-600 hover:text-white-800   hover:text-white pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-comments"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Bình Luận</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative group flex flex-row items-center h-11 focus:outline-none hover:bg-black text-white-600 hover:text-white-800 hover:text-white pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-bell"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Quản Lý Lịch Hẹn</span>
                        <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full group-hover:bg-blue-500 group-hover:text-white ">New</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center mt-5 h-8">
                        <p class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</p>
                    </div>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-black text-white-600 hover:text-white-800   hover:text-white pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">ADMIN</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-black text-white-600 hover:text-white-800   hover:text-white pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-gear"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Cài Đặt</span>
                    </a>
                </li>
                <p class="px-5 py-3 hidden md:block text-center text-xs">@Du_an_1</p>
            </ul>
        </div>
    </div>
    <!-- ./Sidebar -->
</div>
</body>
</html>