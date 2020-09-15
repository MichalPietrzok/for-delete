// get node element / collection--------------------
const elt = (element) =>
document.querySelector(element)

const elts = (elements) =>
document.querySelectorAll(elements)
// --------------------get node element / collection

// add css styles to target-------------------------
const addElementStyles = (elements, obj) => {
  const itemsNodeList = document.querySelectorAll(elements)
  Object.keys(obj).map(item => {
    if (!itemsNodeList.length) {
      itemsNodeList[0].style[item] = obj[item]
    } else {
      Array.from(itemsNodeList).map(element => element.style[item] = obj[item])
    }
  })
}
// -------------------------add css styles to target

// change active element in collection--------------
const changeActive = (elts, n) => {
  let currentElements = document.querySelectorAll(`.${elts}`);
  for (let i = 0; i < currentElements.length; i++) {
    if (currentElements[i]) {
      currentElements[i].classList.remove(`${elts}--active`);
    }
  }
  if (currentElements[n]) {
    currentElements[n].classList.add(`${elts}--active`);
  }
}
// --------------change active element in collection

// start-page-state---------------------------------
const searchCurrentMainMenuLink = (currentLocation, mainMenuLinks, elementsToActive) => {
  let currentPage = 0;
  const linksNodeList = document.querySelectorAll(`${mainMenuLinks}`)
  for (let i = 0; i < linksNodeList.length; i++) {
    if (linksNodeList[i].href === currentLocation) {
      currentPage = i
    }
  }
  if (currentLocation.indexOf('experts') !== -1) currentPage = 2
  else if (currentLocation.indexOf('news') !== -1) currentPage = 3
  addElementStyles('.header__nav-line', {
    'width': elts('.header__nav-list a')[currentPage].offsetWidth + 'px',
    'left': elts('.header__nav-list a')[currentPage].offsetLeft + 'px'
  })

  changeActive(elementsToActive, currentPage)
}
// ---------------------------------start-page-state

// add max height to each item in collection----------------- 
const equalHeigth = (targetItems) => {
  let maxHeight = 0;
  const itemsNodeList = document.querySelectorAll(targetItems)
  if (screen.width > 992) {
    for (let i = 0; i < itemsNodeList.length; i++) {
      if (maxHeight < itemsNodeList[i].offsetHeight) {
        maxHeight = itemsNodeList[i].offsetHeight;
      }
    }
    for (let i = 0; i < itemsNodeList.length; i++) {
      itemsNodeList[i].style.height = `${maxHeight}px`
    }
  }
}

// add max height to each item in collection-----------------

const  getCoords = (elem) => {
  let box = elem.getBoundingClientRect();

  let body = document.body;
  let docEl = document.documentElement;

  let scrollTop = window.pageYOffset || docEl.scrollTop || body.scrollTop;
  let scrollLeft = window.pageXOffset || docEl.scrollLeft || body.scrollLeft;

  let clientTop = docEl.clientTop || body.clientTop || 0;
  let clientLeft = docEl.clientLeft || body.clientLeft || 0;

  let top = box.top + scrollTop - clientTop;
  let left = box.left + scrollLeft - clientLeft;

  return {
    top: top,
    left: left
  };
}

const delay = (n = 2000) => new Promise((done) => setTimeout(() => done(), n));
