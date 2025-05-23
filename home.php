<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<div class="actions">
    <p id="header-title">sisgb - home page</p>
    <div class="btn-container">
        <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-check fa-sm"></i>Produtividade</button>
        <a href="logout.php"><button type="button" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-apple-whole fa-sm"></i></button></a>
        <button type="button" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-right-from-bracket fa-sm"></i></button>
        <button type="button" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-user fa-sm"></i></button>
        <button type="button" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-envelope fa-sm"></i></button>
        
    </div>
</div>

<div class="horizontal-frames">
    <div class="frame">
        <div class="circle">
            <img src="img/downloads.png" class="img_icon_q">
        </div>
        <div class="rectangle entrantes">
            <span>entrantes: 2999</span>
        </div>
    </div>
    <div class="frame">
        <div class="circle">
            <img src="img/proj.png" class="img_icon_q">
        </div>
        <div class="rectangle proj-rect">
            <span>proj: 257569</span>
        </div>
    </div>
    <div class="frame">
        <div class="circle">
            <img src="img/foraproj1.png" class="img_icon_q">
        </div>
        <div class="rectangle fora-proj">
            <span>fora proj: 48539</span>
        </div>
    </div>
    <div class="frame">
        <div class="circle">
            <img src="img/pol3.png" class="img_icon_q">
        </div>
        <div class="rectangle poligonos">
            <span>poligonos: 83842</span>
        </div>
    </div>
</div>

<!--Div that will hold the pie chart-->


<div class="charts">
    <div id="chart_div"></div>
    <div id="curve_chart" style="width: 400px; height: 200px"></div>
    <div id="linechart_material" style="width: 400px; height: 200px"></div>
</div>

<!-- <div class="form">
    
</div> -->











<?php include 'includes/footer.php'; ?>
