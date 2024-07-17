    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">Book a Demo</div>
            <div class="modal-message">Click on the floating button below where it says "We are here" to live chat with an agent from our sales team.</div>
        </div>
    </div>

      <script>
        var modal = document.getElementById("myModal");
        var btn = document.querySelector(".book-demo-button");
        var btn2 = document.querySelector(".book-demo-button2");
        var span = document.querySelector(".close");

        btn.onclick = function() {
            modal.style.display = "block";
        }

        btn2.onclick = function() {
            modal.style.display = "block";
        }
        
        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>




    <div id="subscribeModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="modal-header">Subscribe Now</div>
                <div class="modal-message">Click on the floating button below where it says "We are here" to live chat with an agent from our sales team.</div>
            </div>
        </div>

 <script>
        var modal = document.getElementById("subscribeModal");
        var btns = document.querySelectorAll(".subscribe-button");
        var closeBtn = document.querySelector(".close");

        btns.forEach(function(btn) {
            btn.onclick = function() {
                modal.style.display = "flex";
            }
        });

        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>