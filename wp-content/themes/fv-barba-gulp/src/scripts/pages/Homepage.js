const Homepage = {
  namespace: 'homepage',
  beforeEnter: () => {
    allPagesBarba()
  },
  afterEnter: () => {
    setTimeout(() => {
      const headerHeight = screen.width > 992 ? 0 : 95
      if (elt('.page-image--banner')) {
        elt('.home').style.paddingTop = `${elt('.page-image--banner').offsetHeight / 1.5 + headerHeight}px`
        window.addEventListener('scroll', () => {
          if (elt('.page-image--banner')) {
            elt('.page-image--banner').style.transform = `translateY(-${window.scrollY * 1.5}px)`
          }
        })
      }
      window.addEventListener('scroll', () => {
        const buttonLine = new TimelineMax()
          .to('#scroll-button', { opacity: 0, y: '50', scale: 0, display: 'none', duration: .4 })
      })

      elt('#scroll-button').addEventListener('click', (e) => {
        window.scrollTo({
          top: screen.height / 1.8,
          left: 0,
          behavior: 'smooth'
        });
      })
    }, 0)
  }
}
