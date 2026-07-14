let usrname = document.getElementById("usrname");
let pass = document.getElementById("pass");
let loginBtn = document.getElementById("loginBtn");
let loginForm = document.getElementById("loginForm");
let usernameError = document.getElementById("usernameError");
let passwordError = document.getElementById("passwordError");
let foodItemCon = document.getElementById("foodItemCon");
//let itemCon = document.getElementById("itemCon");
let compForm = document.getElementById("compForm");
let compBtn = document.getElementById("compBtn");
let compSuccMsg = document.getElementById("compSuccMsg");
//let mealTime=document.querySelector("select").value;
//console.log(mealTime)

const d = new Date();
let day = d.getDay();
console.log(day);


// let tueItemArray = [
//     ["EggRice", "https://www.whiskaffair.com/wp-content/uploads/2017/11/Schezwan-Egg-Fried-Rice-3.jpg"],
//     ["Rice", "https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o="],
//     ["TomatoPappu","https://i.ytimg.com/vi/4TAszDj6nvY/maxresdefault.jpg"],
//     ["DondakayaFry","https://www.whiskaffair.com/wp-content/uploads/2017/12/Tindora-Masala-3.jpg"],
//     ["Rasam", "https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800"],
//     ["GongureChutney","https://www.archanaskitchen.com/images/archanaskitchen/0-Archanas-Kitchen-Recipes/2018/Andhra_Gongura_Pachadi_Recipe_-_Andhra_Style_Sorrel_Leaves_Chutney-10.jpg"],
//     ["Ravvakesari","https://www.awesomecuisine.com/wp-content/uploads/2008/03/rava_kesari.jpg"],
//     ["AluDumFry","https://1.bp.blogspot.com/-bZFklOn6O8Q/XGUcV9ZoQUI/AAAAAAAAEaw/AUGKOgqL4lszA2p3Y8gWLcCjhqc-JjknwCLcBGAs/s1600/Dum%2Baalo.jpg"],
//     ["Sambar", "https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg"],
//     ["Curd", "https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg"],

// ];
// let wedItemArray = [
//     ["Vada", "https://www.vegrecipesofindia.com/wp-content/uploads/2021/07/vada-recipe-1.jpg"],
//     ["Rice", "https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o="],
//     ["PalakuraPappu","https://www.indianhealthyrecipes.com/wp-content/uploads/2014/02/spinach-dal.jpg"],
//     ["MulakayaTomato","https://www.keralacookingrecipes.com/wp-content/uploads/2019/06/Drumstick-Tomato-Curry.jpg"],
//     ["Rasam", "https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800"],
//     ["Pickle","https://www.vegrecipesofindia.com/wp-content/uploads/2020/04/pickle-recipes.jpg"],
//     ["VegPalav","https://www.indianveggiedelight.com/wp-content/uploads/2019/07/veg-pulao-instant-pot-featured.jpg"],
//     ["CapiscumPanner","https://www.indianhealthyrecipes.com/wp-content/uploads/2022/04/kadai-paneer-recipe.jpg"],
//     ["ChickenCurry","https://headbangerskitchen.com/wp-content/uploads/2020/06/5INGCHICKENCURRY-Vertic2.jpg"],
//     ["Sambar", "https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg"],
//     ["Curd", "https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg"]
// ];
// let thuItemArray = [
//     ["Upma","https://www.seriouseats.com/thmb/XPrh-AqaBdXXnDnLVuE-ad8OCGs=/569x427/smart/filters:no_upscale()/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__recipes__images__2012__05__20121405-Sooji-Upma-20Indian-Breakfast-21e04a2320de433eb5906cb71caa2b70.jpg"],
//     ["Rice", "https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o="],
//     ["SorakayapesaraPappu","https://i.pinimg.com/736x/20/ce/99/20ce99c41cda2d5c2e74a67ddcafb85b--halal-recipes-spicy-recipes.jpg"],
//     ["VankayaChutney","https://www.indianrecipeinfo.com/wp-content/uploads/2017/02/Brinjal-Chutney-Vankaya-Pachadi.jpg"],
//     ["GoruchukuduFry","https://i.ytimg.com/vi/M4uuuuyBhl4/maxresdefault.jpg"],
//     ["Rasam", "https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800"],
//     ["Laddu","https://c.ndtvimg.com/2021-03/d4bkvgro_boondi-ladoo_625x300_25_March_21.jpg?im=FaceCrop,algorithm=dnn,width=1200,height=886"],
//     ["Sambar", "https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg"],
//     ["Curd", "https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg"]
// ];
// let friItemArray = [
//     ["Idli","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOSpzkKI1RNSVpBGYBPSk3gmFLnHOCuN4SKA&usqp=CAU"],
//     ["Rice", "https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o="],
//     ["PalakDal","https://www.spiceupthecurry.com/wp-content/uploads/2022/05/moong-dal-palak-2.jpg"],
//     ["MixedVegetable","https://static.toiimg.com/thumb/87621413.cms?imgsize=81300&width=800&height=800"],
//     ["Rasam", "https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800"],
//     ["KandhiPacchadhi","https://cdn.aahaaramonline.com/wp-content/uploads/2018/04/andhra_kandi_pachadi_tuvaram_paruppu_thogayal-500x500.jpg"],
//     ["EggCurry","https://thevegconnection.com/wp-content/uploads/2021/06/Egg-Curry-9-Edit-720x720.jpg"],
//     ["CarrotFry", "https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg"],
//     ["Curd", "https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg"]
// ];
// let satItemArray = [
//     ["Chapathi","https://static.toiimg.com/thumb/61203720.cms?imgsize=670417&width=800&height=800"],
//     ["Rice", "https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o="],
//     ["DosakayaPappu","https://www.archanaskitchen.com/images/archanaskitchen/1-Author/Padma_Veeranki/Yellow_Cucumber_Dal__Dosakaya_Pappu.jpg"],
//     ["BeansCurry","https://www.thespruceeats.com/thmb/b4DafD1X9BRI6cJS3xHUOq9h4HM=/1825x1825/smart/filters:no_upscale()/rajma-red-kidney-bean-curry-1957982-hero-images-1-571fc72f271b46759c3bb5b4f1bb4212.JPG"],
//     ["Rasam", "https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800"],
//     ["DondakayaChutney","https://www.archanaskitchen.com/images/archanaskitchen/0-Affiliate-Articles/Tindora_Chutney_Andhra_Style_Recipe-_Dondakaya_Pachadi-15.jpg"],
//     ["ChakkaraPongali","https://www.indianhealthyrecipes.com/wp-content/uploads/2021/01/sweet-pongal-chakkara-pongal.jpg"],
//     ["LemonRice", "https://maayeka.com/wp-content/uploads/2014/09/lemon-rice.jpg"],
//     ["Curd", "https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg"]
// ];
// let sunItemArray = [
//     ["Uthappam","https://vaya.in/recipes/wp-content/uploads/2018/02/Uthappam.jpg"],
//     ["Rice", "https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o="],
//     ["PannerButterMasala","https://www.ruchiskitchen.com/wp-content/uploads/2020/12/Paneer-butter-masala-recipe-3-500x375.jpg"],
//     ["VegPalav","https://www.indianveggiedelight.com/wp-content/uploads/2019/07/veg-pulao-instant-pot-featured.jpg"],
//     ["ChickenCurry","https://headbangerskitchen.com/wp-content/uploads/2020/06/5INGCHICKENCURRY-Vertic2.jpg"],
//     ["Rasam", "https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800"],
//     ["DosakayaChutney","https://cdn2.foodviva.com/static-content/food-images/chutney-raita-recipes/dosakaya-pachadi/dosakaya-pachadi.jpg"],
//     ["Sambar", "https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg"],
//     ["Curd", "https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg"]
// ];
// let monItemArray = [
//     ["Idli", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOSpzkKI1RNSVpBGYBPSk3gmFLnHOCuN4SKA&usqp=CAU"],
//     ["Rice", "https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o="],
//     ["Thotakurapappu","https://2.bp.blogspot.com/-YExsgwtPhP4/UZFOE6tdoZI/AAAAAAAABk4/E5hZBulMeKw/s1600/thotakura+pappu+also+called+a+blend+of+amaranth+leaves+and+lentils.jpg"],
//     ["AluFry","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrxm61dZ5WxtjzTsgHgUs0QMlEL-MaeVi7WA&usqp=CAU"],
//     ["Rasam", "https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800"],
//     ["TomatoChutney","https://www.yummytummyaarthi.com/wp-content/uploads/2015/12/1-4.jpg"],
//     ["VankayabattaniCurry","https://www.teluguone.com/recipeuserfiles/Batani.jpg"],
//     ["Sambar", "https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg"],
//     ["Curd", "https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg"]
// ];
let itemArray = [];

const days = ["sunday","monday","tuesday","wednesday","thursday","friday","saturday"];

async function getArray(){
    console.log("hello");
    const currentDay = new Date().getDay();
    let url = `http://localhost/mess_feedback_project/get_images.php?day=${days[currentDay]}`;
    let res = await fetch(url);
    let data = await res.json();

    data = data.filter(ele=>{ return ele[1]!==null;});
    //data = data.filter(ele => ele[1].length != 0);

    itemArray = data;
    // localStorage.setItem("monarray", JSON.stringify(monItemArray));
    // localStorage.setItem("tuearray", JSON.stringify(tueItemArray));

    // url = `http://localhost/mess_feedback_project/get_images.php?day=tuesday`
    // res = await fetch(url);
    // data = await res.json();

    // data = data.filter(ele => ele[1].length != 0)
    // tueItemArray = data;
    // localStorage.setItem("wedarray", JSON.stringify(wedItemArray));
    // localStorage.setItem("thuarray", JSON.stringify(thuItemArray));
    // localStorage.setItem("friarray", JSON.stringify(friItemArray));
    // localStorage.setItem("satarray", JSON.stringify(satItemArray));
    // localStorage.setItem("sunarray", JSON.stringify(sunItemArray));

    function displayItems(day, container) {

        for (let i = 0; i < itemArray.length; i++) {
            let itemCon = document.createElement('div');
            container.appendChild(itemCon);
            itemCon.classList.add("col-12", "col-md-6", "col-lg-3");
            let itemSubCon = document.createElement('div');
            itemCon.appendChild(itemSubCon);
            itemSubCon.classList.add("shadow", "menu-item-card", "p-4", "mb-3","bg-white");
            let img = document.createElement("img");
            itemSubCon.appendChild(img);
            img.src = itemArray[i][1];
            img.classList.add("menu-item-image", "w-100");
            let itemHeading = document.createElement("h1");
            itemSubCon.appendChild(itemHeading);
            itemHeading.classList.add("menu-card-title", "text-center");
            itemHeading.textContent = itemArray[i][0];
            //menu-item-link

            //star rating
            let ratingCon = document.createElement("div");
            itemSubCon.appendChild(ratingCon);
            ratingCon.classList.add("wrapper","mt-1");
            let ratingSubCon = document.createElement("div");
            ratingCon.appendChild(ratingSubCon);
            ratingSubCon.classList.add("wrapper");

            for (let j = 1; j <= 5; j++) {
                let star = document.createElement("input");
                ratingSubCon.appendChild(star);
                star.setAttribute("type", "radio");
                if(j == 1){
                    star.setAttribute("checked","true");
                }else{
                    star.setAttribute("checked","false");
                }
                star.name = itemArray[i][0];
                star.id = itemArray[i][0] + j;
                star.value = 5 - j + 1;
                let id = itemArray[i][0] + j;
                let label = document.createElement("label");
                ratingSubCon.appendChild(label);
                label.setAttribute("for", id);
                label.classList.add("mr-1");
                console.log(itemSubCon)
            }
        }
    }
    displayItems(day, foodItemCon);

    usrname.addEventListener("blur", function(event) {
        if (event.target.value === "") {
            usernameError.textContent = "*Required";
        }
    });
    pass.addEventListener("blur", function(event) {
        if (event.target.value === "") {
            passwordError.textContent = "*Required";
        }
    });

    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();
    });
    compForm.addEventListener("submit", function(event) {
        event.preventDefault();
    });
    compBtn.onclick = function() {
        alert("Complaint raised successfully.")
    }


}

//     let addBtn = document.getElementById("addBtn");
//     let rmBtm = document.getElementById("addBtn");
//     let aDay = document.getElementById("day").value;
//     let aName = document.getElementById("name");
//     let aLink = document.getElementById("itemLink");
//     let rDay = document.getElementById("itemDay");
//     let rname = document.getElementById("itemName");
//     console.log(aDay);
//     addBtn.onclick = function() {
//         if (aDay === "Monday") {
//             monItemArray.push([aName.value, aLink.value]);
            
//         } else if (aDay === "Tuesday") {
//             tueItemArray.push([aName.value, aLink.value]);
//         } else if (aDay === "Wednesday") {
//             wedItemArray.push([aName.value, aLink.value]);
//         } else if (aDay === "Thursday") {
//             thuItemArray.push([aName.value, aLink.value]);
//         } else if (aDay === "Friday") {
//             friItemArray.push([aName.value, aLink.value]);
//         } else if (aDay === "Saturday") {
//             satItemArray.push([aName.value, aLink.value]);
//         } else {
//             sunItemArray.push([aName.value, aLink.value]);
//         }
//     }

    
    
// }

getArray();

