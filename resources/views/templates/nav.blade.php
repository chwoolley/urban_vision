   <nav>


            <ul class='navigation'>

            @if (Auth::guest())
                <li><a href="/">Home</a></li>
                <li><a href="../about">About</a></li>
                <li><a href="../gallery">Portfolio</a></li>
               
                <li><a href="../contact">Contact</a></li>

            @else 
            
              <li><a href="/">Home</a></li>
                <li><a href="../about">About</a></li>
                <li><a href="../gallery">Portfolio</a></li>
               
                <li><a href="../contact">Contact</a></li>
                   <li><a href="../admin">admin</a></li>

             @endif      
            </ul>

        </nav>