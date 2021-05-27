<link href="<?=base_url('Template/css/survey.css')?>" rel="stylesheet" type="text/css">

<div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-10">
                <form id="regForm">
                    <h1 id="register">Survey Form</h1>
                    <div class="all-steps" id="all-steps"> <span class="step"><i class="fa fa-user"></i></span> <span class="step"><i class="fa fa-map-marker"></i></span> <span class="step"><i class="fa fa-shopping-bag"></i></span> <span class="step"><i class="fa fa-car"></i></span> <span class="step"><i class="fa fa-spotify"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> </div>
<!-- INSTRUCTIONS TAB -->
                    <div class="tab">
                        
                        <h4>Title of Activity: <b>Laro ng Lahi</b></h4>
                        <h6 class="mb-4">Date & Venue: <b>2021-06-26, Kwarto ni Prim</b></h6>
                        <span class="mb-4"><b>Program Management:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor mi. Praesent blandit, lectus id maximus commodo, enim dolor euismod nisi, consequat interdum arcu odio a leo. Phasellus vitae tellus vitae nisl interdum ullamcorper vel eget tortor. Integer dignissim turpis nisl, a bibendum mauris gravida a.</span>

                    </div>
<!-- NUMBA 1 -->
                    <div class="hello tab">
                    <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Program Coordinator</th>
                        <th scope="col">Excellent</th>
                        <th scope="col">Moderate</th>
                        <th scope="col">Satisfactory</th>
                        <th scope="col">X</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>
                            The objective were:<br>
                            a.) The objectives were clearly articulated to the participants<br>
                            b.) The objectives of the program/activity are evident in the presentations/activities.<br>
                            c.) The objectivies were attained by the end of the program/activity.
                        </th>
                        <td class="text-center">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        </td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    
                    </tbody>
                    </table>

                    </div>
                    <div class="hello tab">
                        <h6>What's your Favourite Shopping site?</h6>
                        <p><input placeholder="Favourite Shopping site" oninput="this.className = ''" name="email"></p>
                    </div>
                    <div class="hello tab">
                        <h6>What's your Favourite car?</h6>
                        <p><input placeholder="Favourite car" oninput="this.className = ''" name="uname"></p>
                    </div>
                    <div class="hello tab">
                        <h6>What's your Favourite Song?</h6>
                        <p><input placeholder="Favourite Song" oninput="this.className = ''" name="uname"></p>
                    </div>
                    <div class="hello tab">
                        <h6>What's your Favourite Mobile brand?</h6>
                        <p><input placeholder="Favourite Mobile Brand" oninput="this.className = ''" name="uname"></p>
                    </div>
                    <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                        <h3>Thankyou for your feedback!</h3> <span>Thanks for your valuable information. It helps us to improve our services!</span>
                        <input type="button" value="Reload Page" onClick="window.location.reload(true)">
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div class="text-center mt-4"> <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                    </div>
                    
                </form>
            </div>
            <input type="button" value="Show all" id="remove">
        </div>
    </div>

<script src="<?=base_url('Template/js/survey.js')?>"></script>
