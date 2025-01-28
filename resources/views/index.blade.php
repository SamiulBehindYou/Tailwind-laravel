<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- @vite('resources/css/app.css'); --}}
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body>

    <div class="flex justify-center mt-2">


        <div class="w-200">
            <div class="relative right-0">
              <ul class="relative flex flex-wrap px-1.5 py-1.5 list-none rounded-md bg-slate-100" data-tabs="tabs" role="list">
                <li class="z-30 flex-auto text-center">
                  <a class="z-30 flex items-center justify-center w-full px-0 py-2 text-sm mb-0 transition-all ease-in-out border-0 rounded-md cursor-pointer text-slate-600 bg-inherit"
                  data-tab-target="" role="tab" aria-selected="true" aria-controls="students">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                      class="w-4 h-4 mr-1.5 text-slate-500">
                      <path
                      d="M11.644 1.59a.75.75 0 01.712 0l9.75 5.25a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.712 0l-9.75-5.25a.75.75 0 010-1.32l9.75-5.25z">
                      </path>
                      <path
                      d="M3.265 10.602l7.668 4.129a2.25 2.25 0 002.134 0l7.668-4.13 1.37.739a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.71 0l-9.75-5.25a.75.75 0 010-1.32l1.37-.738z">
                      </path>
                      <path
                      d="M10.933 19.231l-7.668-4.13-1.37.739a.75.75 0 000 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 000-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 01-2.134-.001z">
                      </path>
                    </svg>
                    <span class="ml-1">Students</span>
                  </a>
                </li>
                <li class="z-30 flex-auto text-center">
                  <a class="z-30 flex items-center justify-center w-full px-0 py-2 mb-0 text-sm transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-600 bg-inherit"
                  data-tab-target="" role="tab" aria-selected="false"  aria-controls="teacher">
                    Teacher
                  </a>
                </li>
                {{-- <li class="z-30 flex-auto text-center">
                  <a class="z-30 flex items-center justify-center w-full px-0 py-2 text-sm mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                  data-tab-target="" role="tab" aria-selected="false" aria-controls="teachers">
                    Settings
                  </a>
                </li> --}}
              </ul>

              <div data-tab-content="" class="p-5">
                <div id="students" role="tabpanel">
                    <div class="text-center mb-1">
                        <h2 class="text-2xl/7 font-bold text-gray-600 sm:truncate sm:text-3xl sm:tracking-tight">Students details</h2>
                    </div>
                  <div class="flex justify-center">
                    <table class="">
                        <thead class="bg-gray-400 text-gray-100">
                            <tr>
                                <th class="p-2 rounded-tl-md">SL</th>
                                <th class="p-2 ">Name</th>
                                <th class="p-2 ">Email</th>
                                <th class="p-2 ">Phone</th>
                                <th class="p-2 rounded-tr-md">Action</th>
                            </tr>
                        </thead>
                        <tbody id="studentTable">


                        </tbody>
                        <tr id="studentPagination" class="invisible text-center text-sm text-gray-100 bg-gray-50 rounded-b-lg border-b border-gray-300 bg-gray-200 text-gray-100">
                            <td colspan="5" class="py-2">
                                <button class="bg-gray-400 cursor-pointer my-1 p-2 rounded-l" onclick="previous()">Previous</button>
                                <div class="flex inline" id="pageNumbers">

                                </div>
                                <button class="bg-gray-400 cursor-pointer my-1 p-2 rounded-r" onclick="next()">Next</button>
                            </td>
                        </tr>
                    </table>
                  </div>
                </div>
                <div class="hidden opacity-0" id="teacher" role="tabpanel">
                    <div class="text-center mb-1">
                        <h2 class="text-2xl/7 font-bold text-gray-600 sm:truncate sm:text-3xl sm:tracking-tight">Meeting details</h2>
                    </div>
                    <div class="flex justify-center">
                        <table class="">
                            <thead class="bg-gray-400 text-gray-100">
                                <tr>
                                    <th class="p-2 rounded-tl-md">SL</th>
                                    <th class="p-2 ">Name</th>
                                    <th class="p-2 ">Email</th>
                                    <th class="p-2 ">Phone</th>
                                    <th class="p-2 rounded-tr-md">Action</th>
                                </tr>
                            </thead>
                            <tbody id="teacherTable">


                            </tbody>
                            <tr id="teacherPagination" class="invisible text-center text-sm text-gray-100 bg-gray-50 rounded-b-lg border-b border-gray-300 bg-gray-200 text-gray-100">
                                <td colspan="5" class="py-2">
                                    <button class="bg-gray-400 cursor-pointer my-1 p-2 rounded-l" onclick="t_previous()">Previous</button>
                                    <div class="flex inline" id="t_pageNumbers">

                                    </div>
                                    <button class="bg-gray-400 cursor-pointer my-1 p-2 rounded-r" onclick="t_next()">Next</button>
                                </td>
                            </tr>
                        </table>
                      </div>
                </div>
                {{-- <div class="hidden opacity-0" id="teachers" role="tabpanel">
                    <div class="text-center mb-1">
                        <h2 class="text-2xl/7 font-bold text-gray-600 sm:truncate sm:text-3xl sm:tracking-tight">Teacher details</h2>
                    </div>
                    <div class="flex justify-center">
                        <table class="">
                            <thead class="bg-gray-400 text-gray-100">
                                <tr>
                                    <th class="p-2 rounded-tl-md">SL</th>
                                    <th class="p-2 ">Name</th>
                                    <th class="p-2 ">Email</th>
                                    <th class="p-2 rounded-tr-md">Action</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr class="border-b border-gray-300 bg-gray-200">
                                    <td class="p-2">1</td>
                                    <td class="p-2">Samiul</td>
                                    <td class="p-2">samiul@gmail.com</td>
                                    <td class="p-2"><button class="bg-red-500 text-gray-200 p-1 px-2 rounded-lg">Delete</button></td>
                                </tr>
                                <tr class="border-b border-gray-300 bg-gray-100">
                                    <td class="p-2">1</td>
                                    <td class="p-2">Samiul</td>
                                    <td class="p-2">samiul@gmail.com</td>
                                    <td class="p-2"><button class="bg-red-500 text-gray-200 p-1 px-2 rounded-lg">Delete</button></td>
                                </tr>
                                <tr class="border-b border-gray-300 bg-gray-200">
                                    <td class="p-2">1</td>
                                    <td class="p-2">Samiul</td>
                                    <td class="p-2">samiul@gmail.com</td>
                                    <td class="p-2"><button class="bg-red-500 text-gray-200 p-1 px-2 rounded-lg">Delete</button></td>
                                </tr>

                                <tr class="text-center text-sm text-gray-100 bg-gray-50 rounded-b-lg border-b border-gray-300">
                                    <td colspan="4">
                                        <button class="bg-gray-400 cursor-pointer my-1 px-1 rounded-l">Previous</button>
                                        <button class="bg-gray-400 cursor-pointer my-1 px-2">1</button>
                                        <button class="bg-gray-400 cursor-pointer my-1 px-2">2</button>
                                        <button class="bg-gray-400 cursor-pointer my-1 px-2">3</button>
                                        <button class="bg-gray-400 cursor-pointer my-1 px-1 rounded-r">Next</button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                      </div>
                </div> --}}
              </div>
            </div>
          </div>
    </div>

    <!-- from node_modules -->
    <script src="node_modules/@material-tailwind/html/scripts/tabs.js"></script>

    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        // Onload function
        $(document).ready(function(){
            getStudents();
            getTeachers();
        });
    </script>

    <!-- Get Student data -->
    <script>
        let page = 1;
        let last_page;

        // mother function
        function getStudents(){
            $.ajax({
                type:"GET",
                url:"student/send-data?page="+page,
                data:{},
                success:function(data){
                    last_page = data.last_page;

                    $('#studentTable').html(data.studentTable);
                    if(data.pagination){
                        $('#studentPagination').removeClass('invisible');
                        $('#pageNumbers').html(data.page_numbers);
                    }else{
                        $('#studentPagination').addClass('invisible');
                    }
                }
            });
        }
        // Pageintion
        function previous(){
            if(page > 1){
                page--;
                getStudents()
            }
        }

        function next(){
            if(last_page > page){
                page++;
                getStudents();
            }
        }

        function paginate(page_nno){
            page = page_nno;
            getStudents();
        }

    </script>

    <!-- Get Teacher data -->
    <script>
        let t_page = 1;
        let t_last_page;

        // mother function
        function getTeachers(){
            $.ajax({
                type:"GET",
                url:"teacher/send-data?page="+t_page,
                data:{},
                success:function(data){
                    t_last_page = data.last_page;

                    $('#teacherTable').html(data.studentTable);
                    if(data.pagination){
                        $('#teacherPagination').removeClass('invisible');
                        $('#t_pageNumbers').html(data.page_numbers);
                    }else{
                        $('#teacherPagination').addClass('invisible');
                    }
                }
            });
        }
        // Pageintion
        function t_previous(){
            if(t_page > 1){
                t_page--;
                getTeachers()
            }
        }

        function t_next(){
            if(last_page > t_page){
                t_page++;
                getTeachers();
            }
        }

        function t_paginate(t_page_nno){
            t_page = t_page_nno;
            getTeachers();
        }

    </script>

  </body>
</html>
