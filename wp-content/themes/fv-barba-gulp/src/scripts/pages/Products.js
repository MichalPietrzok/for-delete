const Products = {
  namespace: 'products',
  beforeEnter: () => {
    allPagesBarba()
  },
  afterEnter: () => {
    setTimeout(() => {
      const headerHeight = screen.width > 992 ? 0 : 95
      if (elt('.page-image--banner')) {
        elt('.products').style.paddingTop = `${elt('.page-image--banner').offsetHeight / 2 + headerHeight}px`
        window.addEventListener('scroll', () => {
          if (elt('.page-image--banner')) {
            elt('.page-image--banner').style.transform = `translateY(-${window.scrollY * 2}px)`
          }
        })
      }
    }, 100)
  }
}
