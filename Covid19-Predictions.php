<!DOCTYPE html>
<html lang="en">
	<title>Covid19 Predictions</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<style>
.content {
  max-width: 1200px;
  margin: auto;
}
</style>
<?php
                            $data=file_get_contents ('https://api.covidindiatracker.com/total.json');
                            $covid=json_decode($data,True);

                           ?>
                            <?php $on1=$covid['confirmed'];
							      $on2=$covid['recovered'];
								  $on3=$covid['active'];
								  $on4=$covid['deaths'];
								  ?>
<div class="content">      
<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
     <img src="https://img.icons8.com/color/96/000000/heart-health.png"/>
      <span class="ml-3 text-xl">Covid-19 Predictions</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
	  <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">India</button>
    </nav>
  </div>
</header>

    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="96" height="96"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M121.83333,21.5c-14.964,0 -28.13633,7.65758 -35.83333,19.24967c-7.70058,-11.59208 -20.86933,-19.24967 -35.83333,-19.24967c-23.74675,0 -43,19.25325 -43,43c0,42.79575 78.83333,86 78.83333,86c0,0 78.83333,-42.83875 78.83333,-86c0,-23.74675 -19.25325,-43 -43,-43" fill="#e74c3c"></path><path d="M107.5,86h-18.58317l11.4165,-32.25h-21.5l-10.75,43h17.02083l-9.85417,35.83333z" fill="#ffebee"></path></g></g></svg>
          <h2 class="title-font font-medium text-3xl text-gray-900"><?php echo $on1; ?></h2>
          <p class="leading-relaxed">Confirmed</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="96" height="96"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M121.83333,21.5c-14.964,0 -28.13633,7.65758 -35.83333,19.24608c-7.70058,-11.5885 -20.86933,-19.24608 -35.83333,-19.24608c-23.74675,0 -43,19.25325 -43,43c0,42.79575 78.83333,86 78.83333,86c0,0 78.83333,-42.83875 78.83333,-86c0,-23.74675 -19.25325,-43 -43,-43" fill="#2ecc71"></path><path d="M103.93817,89.58333h12.384c1.98158,0 3.58333,-1.60533 3.58333,-3.58333c0,-1.978 -1.60175,-3.58333 -3.58333,-3.58333h-17.20717l-4.23908,10.406l-11.77483,-27.52717l-12.67783,36.7865l-16.039,-64.14167l-13.89258,49.83342l-10.03333,-23.40992l-7.74,18.05283h-11.2875c1.08933,2.41158 2.35783,4.80167 3.79117,7.16667h12.22275l3.01358,-7.0305l11.46667,26.76033l12.083,-43.33683l15.31517,61.275l14.49817,-42.04683l11.21583,26.22283z" fill="#ffebee"></path><path d="M121.83333,78.83333c-3.95804,0 -7.16667,3.20863 -7.16667,7.16667c0,3.95804 3.20863,7.16667 7.16667,7.16667c3.95804,0 7.16667,-3.20863 7.16667,-7.16667c0,-3.95804 -3.20863,-7.16667 -7.16667,-7.16667z" fill="#ffebee"></path></g></g></svg>
          <h2 class="title-font font-medium text-3xl text-gray-900"><?php echo $on2; ?></h2>
          <p class="leading-relaxed">Recovered</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="96" height="96"
viewBox="0 0 172 172"
style=" fill:#000000;" align="center"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M121.83333,21.5c-14.964,0 -28.13633,7.65758 -35.83333,19.24608c-7.70058,-11.5885 -20.86933,-19.24608 -35.83333,-19.24608c-23.74675,0 -43,19.25325 -43,43c0,42.79575 78.83333,86 78.83333,86c0,0 78.83333,-42.83875 78.83333,-86c0,-23.74675 -19.25325,-43 -43,-43" fill="#f1c40f"></path><path d="M103.93817,89.58333h12.384c1.98158,0 3.58333,-1.60533 3.58333,-3.58333c0,-1.978 -1.60175,-3.58333 -3.58333,-3.58333h-17.20717l-4.23908,10.406l-11.77483,-27.52717l-12.67783,36.7865l-16.039,-64.14167l-13.89258,49.83342l-10.03333,-23.40992l-7.74,18.05283h-11.2875c1.08933,2.41158 2.35783,4.80167 3.79117,7.16667h12.22275l3.01358,-7.0305l11.46667,26.76033l12.083,-43.33683l15.31517,61.275l14.49817,-42.04683l11.21583,26.22283z" fill="#ffebee"></path><path d="M121.83333,78.83333c-3.95804,0 -7.16667,3.20863 -7.16667,7.16667c0,3.95804 3.20863,7.16667 7.16667,7.16667c3.95804,0 7.16667,-3.20863 7.16667,-7.16667c0,-3.95804 -3.20863,-7.16667 -7.16667,-7.16667z" fill="#ffebee"></path></g></g></svg>
          <h2 class="title-font font-medium text-3xl text-gray-900"><?php echo $on3; ?></h2>
          <p class="leading-relaxed">Active</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="96" height="96"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M121.83333,21.5c-14.964,0 -28.13633,7.65758 -35.83333,19.24967c-7.70058,-11.59208 -20.86933,-19.24967 -35.83333,-19.24967c-23.74675,0 -43,19.25325 -43,43c0,42.79575 78.83333,86 78.83333,86c0,0 78.83333,-42.83875 78.83333,-86c0,-23.74675 -19.25325,-43 -43,-43" fill="#333333"></path><path d="M107.5,86h-18.58317l11.4165,-32.25h-21.5l-10.75,43h17.02083l-9.85417,35.83333z" fill="#ffebee"></path></g></g></svg>
          <h2 class="title-font font-medium text-3xl text-gray-900"><?php echo $on4; ?></h2>
          <p class="leading-relaxed">Deaths</p>
        </div>
      </div>
    </div>

<?php
                            $data=file_get_contents ('https://covid19-api.org/api/prediction/IN');
                            $covid=json_decode($data,True);

                             $i=0;
                             while($i <=6){
                             ?>
                            <?php $one=$covid[$i]['date'];
                             $two=$covid[$i]['cases']; ?>
    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-200 rounded flex p-4 h-full items-center">
          <img src="https://img.icons8.com/color/48/000000/today.png"/>
          <span class="title-font font-medium"><?php echo $one; ?></span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-200 rounded flex p-4 h-full items-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="48" height="48"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ff0e0e"><path d="M45.86667,11.46667c-9.4993,0 -17.2,7.7007 -17.2,17.2c0,9.4993 7.7007,17.2 17.2,17.2c9.4993,0 17.2,-7.7007 17.2,-17.2c0,-9.4993 -7.7007,-17.2 -17.2,-17.2zM126.13333,11.46667c-9.4993,0 -17.2,7.7007 -17.2,17.2c0,9.4993 7.7007,17.2 17.2,17.2c9.4993,0 17.2,-7.7007 17.2,-17.2c0,-9.4993 -7.7007,-17.2 -17.2,-17.2zM37.625,57.33333c-7.86548,0 -14.78183,5.40498 -16.6849,13.03438l-9.30547,37.17708c-0.49672,1.98854 0.10538,4.09101 1.57941,5.51518c1.47403,1.42417 3.59597,1.95359 5.56625,1.38876c1.97028,-0.56482 3.48945,-2.13805 3.98507,-4.12686l5.9013,-23.60521v62.15964c0,3.268 2.6557,5.9237 5.9237,5.9237c3.11893,0 5.7061,-2.42431 5.9125,-5.53177l2.50833,-37.65859c0.1032,-1.50213 1.3476,-2.6763 2.85547,-2.6763c1.50787,0 2.75227,1.16871 2.85547,2.66511l2.50833,37.66979c0.2064,3.1132 2.79357,5.53177 5.9125,5.53177c3.268,0 5.9237,-2.6557 5.9237,-5.9237v-64.69036l2.76589,4.71432c0.38421,0.65359 0.89422,1.2245 1.50052,1.67969l14.44531,10.88438c1.10131,1.15722 2.63545,1.80254 4.23281,1.78046c1.56907,0.01221 3.0746,-0.61913 4.16563,-1.74687l14.4901,-10.91797c0.6063,-0.45519 1.11631,-1.0261 1.50052,-1.67969l2.76589,-4.71432v64.69036c0,3.268 2.6557,5.9237 5.9237,5.9237c3.11893,0 5.7061,-2.41857 5.9125,-5.53177l2.50833,-37.66979c0.1032,-1.4964 1.3476,-2.66511 2.85547,-2.66511c1.50787,0 2.75227,1.17417 2.85547,2.6763l2.50833,37.65859c0.2064,3.10747 2.79357,5.53177 5.9125,5.53177c3.268,0 5.9237,-2.6557 5.9237,-5.9237v-62.15964l5.9013,23.60521c0.49564,1.98879 2.01481,3.56199 3.98508,4.1268c1.97027,0.56481 4.09219,0.0354 5.56621,-1.38876c1.47402,-1.42415 2.07613,-3.5266 1.57944,-5.51514l-9.29427,-37.17708c-1.90306,-7.6294 -8.81942,-13.03438 -16.68489,-13.03438h-13.14636c-6.09483,0 -11.75785,3.23501 -14.83724,8.49922l-9.55183,16.28177l-10.85078,8.17448l-10.85078,-8.17448l-9.55183,-16.28177c-3.07939,-5.26448 -8.74241,-8.49922 -14.83724,-8.49922h-4.89349z"></path></g></g></svg>
          <span class="title-font font-medium"><?php echo $two; ?></span>
        </div>
      </div>
</div>
<?php    
   $i++;
       }
?>

<footer class="text-gray-700 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
     <img src="https://img.icons8.com/color/48/000000/heart-health.png"/>
      <span class="ml-3 text-xl">Covid19 Prediction using Machine learning </span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">Prediction Update After Everys 24 hours © 2020 Developed By —
      <a href="https://www.facebook.com/sadiqk1" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">Sadiq Khan</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
       <a href="https://www.instagram.com/sadiq_ali_khan">  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg></a>
      </a>
     
      <a class="ml-3 text-gray-500">
       <a href="https://www.facebook.com/sadiqk1"> <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg></a>
      </a>  
    </span>
</div>
</footer>
</div>
</html>