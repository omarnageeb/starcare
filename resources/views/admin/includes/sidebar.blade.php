<div class="sideMenu">
                 <div class="userDetails">
                    <img class="userImg" src="{{asset('images/logo/'.$logo[0]->photo)}}">
                    <i class="fa-solid fa-right-to-bracket sideBarCustomize"></i>
                    <i class="fa-solid fa-right-to-bracket sideBarCustomizeClose"></i>
                 </div>
                  <div class="sidenav">

                     <a href="{{Route('admin.dashboard')}}"><button class="dropdown-btn active">dashboard  <i class="fa-solid fa-house icon"></i></button></a>

                    <button class="dropdown-btn active">home page  <i class="fa-solid fa-house icon"></i>
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                      <a href="{{Route('addlogo')}}">logo</a>
                      <a href="{{Route('addSlider')}}">slider</a>
                      <a href="{{Route('addServices')}}">services</a>
                      <a href="{{Route('addAboutClient')}}">about clients</a>
                      <a href="{{Route('addClients')}}">clients</a>
                      <a href="{{Route('addPartners')}}">partners</a>
                    </div>

                    <button class="dropdown-btn"> solutions<i class="fa-solid fa-bags-shopping icon"></i>
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                      <a href="{{Route('addSolutions')}}">add solutions</a>
                    </div>

                    <button class="dropdown-btn">news<i class="fa-solid fa-car icon"></i>
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                      <a href="{{Route('addNews')}}">add news</a>
                    </div>
                    <button class="dropdown-btn">pages <i class="fa-solid fa-money-bill-wave icon"></i>
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                      <a href="{{Route('addAboutUs')}}">about us</a>
                      <a href="{{Route('addContactUs')}}">contact us</a>
                    </div>


                  </div>
              </div>
