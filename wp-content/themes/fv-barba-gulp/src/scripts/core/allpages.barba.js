const allPagesBarba = () => {
  window.scrollTo(0, 0)
  setTimeout(() => {
    scrollClasses.enableScrollAnimation(
      elts('#content > div >  section'),
      elts('#content > div >  section').length - 1
    )

    elt('#scroll-top').addEventListener('click', (e) => {
      window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
    })
  }, 500)

}
