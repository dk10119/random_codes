// this is debounce function
const debounce = (func, delay) => {
  let debounceTimer;
  return function () {
    const context = this;
    const args = arguments;
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => func.apply(context, args), delay);
  };
};

//this is main function
const exampleFunction = () => {
  console.log("function ran!");
};

//call main function with debounce
debounce(exampleFunction, 1000);
