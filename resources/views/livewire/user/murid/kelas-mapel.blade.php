<div>
    <x-header.user-navigation :user="$user"/>
    <section class="flex pt-5 pr-3 md:justify-end" aria-label="Breadcrumb" id="breadcumb">
        <div class="flex justify-start md:hidden">
            <button type="button" class="inline-flex items-center px-4 py-3 m-1 text-sm font-medium border border-transparent rounded-lg ms-0 gap-x-2 text-blue hover:bg-sky focus:outline-none focus:bg-blue disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-body-scrolling-with-backdrop" data-hs-overlay="#hs-offcanvas-body-scrolling-with-backdrop">
                <i class="fa-solid fa-bars"></i>
            </button>
            
            <div id="hs-offcanvas-body-scrolling-with-backdrop" class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-e dark:bg-neutral-800 dark:border-neutral-700 [--body-scroll:true]' role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-body-scrolling-with-backdrop-label">
                <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                    <h3 id="hs-offcanvas-body-scrolling-with-backdrop-label" class="font-bold text-gray-800 dark:text-white">
                        Body scrolling with backdrop
                    </h3>
                    <button type="button" class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-offcanvas-body-scrolling-with-backdrop">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                        <button type="button" class="inline-flex items-center py-1 text-sm text-gray-500 border-transparent hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 dark:hs-tab-active:text-blue-600 pe-4 gap-x-2 border-e-2 whitespace-nowrap hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="vertical-tab-with-border-item-1" aria-selected="true" data-hs-tab="#vertical-tab-with-border-1" aria-controls="vertical-tab-with-border-1" role="tab">
                          Tab 1
                        </button>
                        <button type="button" class="inline-flex items-center py-1 text-sm text-gray-500 border-transparent hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 dark:hs-tab-active:text-blue-600 pe-4 gap-x-2 border-e-2 whitespace-nowrap hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="vertical-tab-with-border-item-2" aria-selected="false" data-hs-tab="#vertical-tab-with-border-2" aria-controls="vertical-tab-with-border-2" role="tab">
                          Tab 2
                        </button>
                        <button type="button" class="inline-flex items-center py-1 text-sm text-gray-500 border-transparent hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 dark:hs-tab-active:text-blue-600 pe-4 gap-x-2 border-e-2 whitespace-nowrap hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="vertical-tab-with-border-item-3" aria-selected="false" data-hs-tab="#vertical-tab-with-border-3" aria-controls="vertical-tab-with-border-3" role="tab">
                          Tab 3
                        </button>
                      </nav>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                            </svg>
                        Home
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2">Timeline</span>
                    </div>
                </li>
            </ol>
        </div>
    </section>


    <section class="mt-5 bg-blue" id="banner">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16">
            <h1 class="px-4 mb-2 text-lg font-extrabold leading-none tracking-tight text-white font-heading">Kelas X RPL 2</h1>
            <p class="px-4 text-sm font-light text-white font-default">Matematika</p>
        </div>
    </section>

    <section class="max-w-screen-xl my-5 md:grid md:grid-cols-3 md:gap-4 font-default">
        <div class="hidden md:block">
            <div class="px-8 border-gray-200 border-e dark:border-neutral-700">
                <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                  <button type="button" class="inline-flex items-center py-3 text-gray-500 border-transparent hs-tab-active:border-blue hs-tab-active:text-blue pe-4 gap-x-2 border-e-2 text-md hs-tab-active:font-semibold whitespace-nowrap hover:text-blue focus:outline-none focus:text-blue active" id="vertical-tab-with-border-item-1" aria-selected="true" data-hs-tab="#vertical-tab-with-border-1" aria-controls="vertical-tab-with-border-1" role="tab">
                    Timeline
                  </button>
                  <button type="button" class="inline-flex items-center py-3 text-gray-500 border-transparent hs-tab-active:border-blue hs-tab-active:text-blue dark:hs-tab-active:text-blue pe-4 gap-x-2 border-e-2 text-md hs-tab-active:font-semibold whitespace-nowrap hover:text-blue focus:outline-none focus:text-blue" id="vertical-tab-with-border-item-2" aria-selected="false" data-hs-tab="#vertical-tab-with-border-2" aria-controls="vertical-tab-with-border-2" role="tab">
                    Materi
                  </button>
                  <button type="button" class="inline-flex items-center py-3 text-gray-500 border-transparent hs-tab-active:border-blue hs-tab-active:text-blue dark:hs-tab-active:text-blue pe-4 gap-x-2 border-e-2 text-md hs-tab-active:font-semibold whitespace-nowrap hover:text-blue focus:outline-none focus:text-blue" id="vertical-tab-with-border-item-3" aria-selected="false" data-hs-tab="#vertical-tab-with-border-3" aria-controls="vertical-tab-with-border-3" role="tab">
                    Tugas
                  </button>
                </nav>
              </div>
        </div>
        <div class="col-span-2">
            <div class="ms-3">
                <div id="vertical-tab-with-border-1" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-1">
                    <div>
                        <!-- Heading -->
                        <div class="my-2 ps-2 first:mt-0">
                          <h3 class="text-xs font-medium text-gray-500 uppercase">
                            1 Aug, 2023
                          </h3>
                        </div>
                        <!-- End Heading -->
                      
                        <!-- Item -->
                        <div class="relative flex rounded-lg gap-x-3 group">
                          <a class="absolute inset-0 z-[1]' href="#"></a>
                      
                          <!-- Icon -->
                          <div class="hidden md:block relative last:after:hidden after:absolute after:top-0 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200">
                            <div class="relative z-10 flex items-center justify-center size-7">
                              <div class="bg-white border-2 border-gray-300 rounded-full size-2 group-hover:border-gray-600"></div>
                            </div>
                          </div>
                          <!-- End Icon -->
                      
                          <!-- Right Content -->
                          <div class="p-2 pb-8 grow">
                            <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                                <div class="flex justify-between p-4 md:p-5">
                                    <div class="flex items-stretch gap-x-5">
                                        <div class="self-center">
                                            <i class="text-4xl fa-regular fa-note-sticky text-blue"></i>
                                        </div>
                                        <div>
                                            <a class="text-lg font-bold text-gray-800 cursor-pointer font-heading">
                                                Konsep Algoritma
                                            </a>
                                            <p class="text-sm text-gray-600">
                                                Algoritma Pemrograman
                                            </p>
                                            <p class="text-xs text-gray-400">
                                                13 Mar 2023 16:48 WIB
                                            </p>
                                        </div>
                                        <div class="mt-2">
                                            <span class="inline-flex items-center px-2 py-1 text-sm text-gray-500 bg-gray-100 rounded">
                                                Draft
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div class="relative inline-flex hs-dropdown">
                                            <button id="hs-dropdown-custom-icon-trigger" type="button" class="text-sm font-semibold text-gray-800 rounded-lg hs-dropdown-toggle size-9" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                                <i class="fa-solid fa-ellipsis"></i>
                                            </button>
                                          
                                            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-1 space-y-0.5 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-custom-icon-trigger">
                                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100" href="#">
                                                    Edit
                                                </a>
                                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100" href="#">
                                                    Hapus
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end p-4 md:p-5">
                                    <div class="h-auto p-4 bg-white border rounded-sm shadow-sm w-72 md:p-5">
                                        <div class="flex items-stretch justify-center gap-x-3 ">
                                            <div class="self-center">
                                                <p class="text-sm font-bold text-gray-800">Deadline :</p>
                                            </div>
                                            <div>
                                                <span class="px-3 py-1 text-sm text-white rounded-2xl bg-blue">
                                                    13 Mar 2023 16:48 WIB
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex justify-center gap-2 px-8 py-4 mt-3 border-t">
                                            <div>
                                                <i class="text-6xl fa-solid fa-clipboard-check text-blue"></i>
                                            </div>
                                            <div class="mt-2 ml-4">
                                                <p class="text-sm font-light">Dikumpulkan :</p>
                                                <p class="font-light text-md"><span class="text-2xl font-bold">0/30</span> siswa</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end px-4 py-3 border-t rounded-b-xl md:py-4 md:px-5 gap-x-5">
                                    <button type="button" class="text-sm text-gray-600">
                                        <i class="fa-solid fa-paperclip"></i>
                                        <span>2 Lampiran</span>
                                    </button>
                                    <button  type="button" class="text-sm text-gray-600">
                                        <i class="fa-solid fa-share-nodes"></i>
                                        <span>Bagikan</span>
                                    </button>
                                </div>
                              </div>
                          </div>
                          <!-- End Right Content -->
                        </div>
                        <!-- End Item -->
                    </div>

                </div>
                <div id="vertical-tab-with-border-2" class="hidden" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-2">
                    <div class="hs-accordion-group">
                        <div class="hs-accordion active" id="hs-basic-nested-heading-one">
                          <button class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="true" aria-controls="hs-basic-nested-collapse-one">
                            <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5v14"></path>
                            </svg>
                            <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                            </svg>
                            Accordion #1
                          </button>
                          <div id="hs-basic-nested-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-nested-heading-one">
                            <p class="text-gray-800 dark:text-neutral-200">
                                <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                              </p>
                            <div class="hs-accordion-group ps-6">
                              <div class="hs-accordion active" id="hs-basic-nested-sub-heading-one">
                                <button class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="true" aria-controls="hs-basic-nested-sub-collapse-one">
                                  <svg class="block hs-accordion-active:hidden size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                  </svg>
                                  <svg class="hidden hs-accordion-active:block size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                  </svg>
                                  Sub accordion #1
                                </button>
                                <div id="hs-basic-nested-sub-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-nested-sub-heading-one">
                                  <p class="text-gray-800 dark:text-neutral-200">
                                    <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                                  </p>
                                </div>
                              </div>
                      
                              <div class="hs-accordion" id="hs-basic-nested-sub-heading-two">
                                <button class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-nested-sub-collapse-two">
                                  <svg class="block hs-accordion-active:hidden size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                  </svg>
                                  <svg class="hidden hs-accordion-active:block size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                  </svg>
                                  Sub accordion #2
                                </button>
                                <div id="hs-basic-nested-sub-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-nested-sub-heading-two">
                                  <p class="text-gray-800 dark:text-neutral-200">
                                    <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                                  </p>
                                </div>
                              </div>
                      
                              <div class="hs-accordion" id="hs-basic-nested-sub-heading-three">
                                <button class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-nested-sub-collapse-three">
                                  <svg class="block hs-accordion-active:hidden size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M8.12421 13.36V2.35999" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                  </svg>
                                  <svg class="hidden hs-accordion-active:block size-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                  </svg>
                                  Sub accordion #3
                                </button>
                                <div id="hs-basic-nested-sub-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-nested-sub-heading-three">
                                  <p class="text-gray-800 dark:text-neutral-200">
                                    <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                        <div class="hs-accordion" id="hs-basic-nested-heading-two">
                          <button class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-nested-collapse-two">
                            <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5v14"></path>
                            </svg>
                            <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                            </svg>
                            Accordion #2
                          </button>
                          <div id="hs-basic-nested-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-nested-heading-two">
                            <p class="text-gray-800 dark:text-neutral-200">
                              <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                            </p>
                          </div>
                        </div>
                      
                        <div class="hs-accordion" id="hs-basic-nested-heading-three">
                          <button class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-nested-collapse-three">
                            <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5v14"></path>
                            </svg>
                            <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                            </svg>
                            Accordion #3
                          </button>
                          <div id="hs-basic-nested-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-nested-heading-three">
                            <p class="text-gray-800 dark:text-neutral-200">
                              <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                            </p>
                          </div>
                        </div>
                      </div>
                </div>
                <div id="vertical-tab-with-border-3" class="hidden" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-3">
                  <p class="text-gray-500">
                    This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">third</em> item's tab body.
                  </p>
                </div>
              </div>
        </div>
    </section>
    <x-footer.user-footer/>
</div>
