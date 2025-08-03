
const services = [
    {
        id: "",
        Available: "",
        Type: "",
        Moduls: "",
        Value: "",
        Speed: ""
    },
   
]
/* end PARAMETERS FOR CREATED PRODUCTS */

/* start CAPTURING PAGE FILTER FIELDS */

// for cost filter
let min_range = document.querySelector('#Min_cost');
let max_range = document.querySelector('#Max_cost');
// for speed filter
let min_speed = document.querySelector('#Min_speed');
let max_speed = document.querySelector('#Max_speed');
//////////////adding a new NUMERICAL filter//////////////

// for manufacturer filter
const Manufacture_checkboxes = document.querySelectorAll('.Manufacturer_filter [type="checkbox"]');
// for type filter
const Type_checkboxes = document.querySelectorAll('.Type_filter [type="checkbox"]');
// for number of modules in set filter
const Moduls_checkboxes = document.querySelectorAll('.Moduls_filter [type="checkbox"]');
// for module volume filter
const Value_checkboxes = document.querySelectorAll('.Value_filter [type="checkbox"]');
/////////////////////////////////////////////////////////////////////ADDING A NEW FILTER

// message to the user indicating that there are no such products in stock
var No_prods = document.querySelector('#no_prods');

/* start CAPTURING PAGE FILTER FIELDS */

let answer; // array of elements that match the filter conditions from the array of all elements (services)
let answer_ids; // array with IDs of elements from the answer array

const filters = {
Manufacture: new Set(),
Type: new Set(),
Moduls: new Set(),
Value: new Set(),
Speed: new Set()

/////////////////////////////////////////////////////////////////////ADDING A NEW FILTER
};

/* end CAPTURING PAGE FILTER FIELDS */



// forming the answer array (array of all products on the page with their parameters as class objects)
const findServices = (filters) => {
    let answer = [...services];

    for (const filter in filters) {
        const filterSet = filters[filter];

        answer = answer.filter(
            item => filterSet.size === 0 ||  filterSet.has(item[filter])
        );
    }
    return answer;
}

// forming the answer array on page load
document.onload = findServices(filters);

// updating the array of IDs (answer_ids) from the answer array
function generate_ids() {
    answer = findServices(filters);
    answer_ids = []
    for (let i = 0; i < answer.length; i++) {
        answer_ids.push(answer[i].id);
        console.log(answer_ids[i]);
    }
}

// GENERATING INITIAL FILTER IDS ON START
// (to display all products based on initial filters when opening the page)
generate_ids();

/* start REMOVING FILTERS OF PRODUCTS THAT ARE OUT OF STOCK AT THE START */
function check_disabled_types() {
    Type_checkboxes.forEach(checkbox => {
        let checkbox_type = checkbox.id.split("-")[1]; // type of filter for the current product
        let checkbox_type_flag = false; // flag for product existence with the filter
        answer.forEach(element => {
            if (checkbox_type_flag === true) // if there is already at least one product with such a filter, skip checking all other products
                return;
            if (element.Type === checkbox_type) { // if there is a product in the list with such a filter, mark it
                checkbox_type_flag = true;
                console.log(element.Type);
                console.log(element.Type === checkbox_type);
            }
        });
        checkbox.disabled = checkbox_type_flag === false;
    });
}



function check_disabled_manufactures() {
    Manufacture_checkboxes.forEach(checkbox => {
        let checkbox_type = checkbox.id.split("-")[1]; // type of filter for the current product
        let checkbox_type_flag = false; // flag for product existence with the filter
        answer.forEach(element => {
            if (checkbox_type_flag === true) // if there is already at least one product with such a filter, skip checking all other products
                return;
            if (element.Manufacture === checkbox_type) { // if there is a product in the list with such a filter, mark it
                checkbox_type_flag = true;
                console.log(element.Manufacture);
                console.log(element.Manufacture === checkbox_type);
            }
        });
        checkbox.disabled = checkbox_type_flag === false;
    });
}

function check_disabled_moduls() {
    Moduls_checkboxes.forEach(checkbox => {
        let checkbox_type = checkbox.id.split("-")[1]; // type of filter for the current product
        let checkbox_type_flag = false; // flag for product existence with the filter
        answer.forEach(element => {
            if (checkbox_type_flag === true) // if there is already at least one product with such a filter, skip checking all other products
                return;
            if (element.Moduls === checkbox_type) { // if there is a product in the list with such a filter, mark it
                checkbox_type_flag = true;
                console.log(element.Moduls);
                console.log(element.Moduls === checkbox_type);
            }
        });
        checkbox.disabled = checkbox_type_flag === false;
    });
}

function check_disabled_value() { ////// REPLACE for a new filter
    Value_checkboxes.forEach(checkbox => { ////// REPLACE for a new filter
        let checkbox_type = checkbox.id.split("-")[1]; // type of filter for the current product
        let checkbox_type_flag = false; // flag for product existence with the filter
        answer.forEach(element => {
            if (checkbox_type_flag === true) // if there is already at least one product with such a filter, skip checking all other products
                return;
            // if there is a product in the list with such a filter, mark it
            if (element.Value === checkbox_type) { ////// REPLACE for a new filter
                checkbox_type_flag = true;
                console.log(element.Value); ////// REPLACE for a new filter
                console.log(element.Value === checkbox_type); ////// REPLACE for a new filter
            }
        });
        checkbox.disabled = checkbox_type_flag === false;
    });
}
///////////////////////////////////////////////////////////////////// ADDING A NEW FILTER

check_disabled_types();
check_disabled_manufactures();
check_disabled_moduls();
check_disabled_value();
///////////////////////////////////////////////////////////////////// ADDING A NEW FILTER

/* end REMOVING FILTERS OF PRODUCTS THAT ARE OUT OF STOCK AT THE START */


/* start CHECKING FOR REMAINING UNCHANGED FILTERS */

// cost filter check
function filter_by_cost(element) {
    let elementPrice = element.querySelector('.cost_label').innerHTML.replace(/[^0-9]/g, "");
    if (+elementPrice > max_range.value || +elementPrice < min_range.value) {
        return false;
    }
    if (+elementPrice < max_range.value && +elementPrice > min_range.value) {
        return true;
    }
}

// speed filter check
function filter_by_speed(element) {
    let flag = false
    answer.forEach(ans => {
        if (ans.id === element.id && ans.Speed >= min_speed.value && ans.Speed <= max_speed.value)
            flag = true;
    });
    return flag;
}
//////////////adding a new NUMERICAL filter//////////////

// normal filter check
function filter_by_id(element) {
    if (answer_ids.indexOf(element.id) > -1) return true;
    else return false;
}

/* end CHECKING FOR REMAINING UNCHANGED FILTERS */

// check for products matching current filters
let amount_of_elems = services.length + 1; // one is a sample without information
console.log(amount_of_elems);
function no_prods_check() {
    const hidden_elements = document.querySelectorAll('.hidden');
    console.log(hidden_elements.length);
    if (hidden_elements.length === amount_of_elems) No_prods.style.display = "flex";
    else No_prods.style.display = "none";
}

/* start REACTING TO FILTER CHANGES */

function filter_calculate() {
    let cards = document.querySelectorAll('.product_card');
    cards.forEach(element => {
        if (filter_by_cost(element) &&
            filter_by_id(element) &&
            filter_by_speed(element)) { //////////////adding a new NUMERICAL filter//////////////
            element.classList.remove('hidden');
        }
        else {
            element.classList.add('hidden');
        }
    });
    // display message if no such products
    no_prods_check();
}

// reaction to changes in minimum cost filter
min_range.addEventListener('change', function () {
    filter_calculate();
})
// reaction to changes in maximum cost filter
max_range.addEventListener('change', function () {
    filter_calculate();
})

// reaction to changes in minimum speed filter
min_speed.addEventListener('change', function () {
    filter_calculate();
})
// reaction to changes in maximum speed filter
max_speed.addEventListener('change', function () {
    filter_calculate();
})
//////////////adding a new NUMERICAL filter//////////////

function setFilterListener(e) {
    console.clear();

    const target = e.target;
    const [prop, value] = target.name.split('-');

    filters[prop][target.checked ? 'add' : 'delete']('' + value);

    // regenerate when filters change
    generate_ids();

    filter_calculate();

    // display message if no such products
    no_prods_check();
}

Manufacture_checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', (e) => {
        setFilterListener(e);
    })
});

Type_checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', (e) => {
        setFilterListener(e);
    })
});

Moduls_checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', (e) => {
        setFilterListener(e);
    })
});
Value_checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', (e) => {
        setFilterListener(e);
    })
});
/////////////////////////////////////////////////////////////////////ADDING A NEW FILTER

/* end REACTING TO FILTER CHANGES */


