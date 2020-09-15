const headerButtonAnimation = new TimelineMax()
  .to('.header__button-line--third', { duration: .8, ease: Power3.easeOut, scaleX: 0 })
  .to('.header__button-line--second', { duration: .8, ease: Power3.easeOut, top: '100%', rotate: '45deg' }, '-=.4')
  .to('.header__button-line--first', { duration: .8, ease: Power3.easeOut, rotate: '-45deg' }, '<')
  .reversed(true)

const headerNavAnimation = new TimelineMax()
  .to('.header__panel-container', { duration: .1, ease: Power3.easeOut, display: 'block' })
  .to('.header__bg', { duration: .4, ease: Power1.easeOut, opacity: 1 })
  .to('.header__panel', { duration: 1, ease: Power4.easeInOut, height: 'auto' })
  .reversed(true)

const headerTitleAnimation = new TimelineMax()
  .to('.header__name', { duration: .6, y: '-100%', opacity: 0 })
  .fromTo('.header__panel-wrap', { opacity: 0 }, { duration: .3, opacity: 1 })
  .reversed(true)

const headerStateChange = (act) => {
  const headerAnimationLine = new TimelineMax()
    .add(() => headerButtonAnimation.reversed(act || !headerButtonAnimation.reversed()))
    .add(() => headerNavAnimation.reversed(act || !headerNavAnimation.reversed()))
    .add(() => headerTitleAnimation.reversed(act || !headerTitleAnimation.reversed()))
  elt('.header').classList.toggle('header--transparent')
}

elt('#header-button').addEventListener('click', () => headerStateChange())

for (let i = 0; i < elts('.header__navigation-list a').length; i++) {
  elts('.header__navigation-list a')[i].addEventListener('click', () => {
    if (screen.width < 992) headerStateChange()
  })
}

window.addEventListener('scroll', () => {
  window.pageYOffset > 0
    ? elt('.header').classList.add('header--scrolled') : elt('.header').classList.remove('header--scrolled');
})
