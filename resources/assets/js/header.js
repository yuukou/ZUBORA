document.addEventListener('DOMContentLoaded', () => {
  function addEventListenerPullDownMenu() {
    const element = document.querySelector('.js-header');

    if (element.querySelector('.js-pull-down-menu')) { // ログインしているときのみmenuが存在する
      element.querySelector('.js-pull-down-anchor').addEventListener('mouseenter', (e) => {
        element.querySelector('.js-pull-down-menu').style.display = 'block';
      });
      element.querySelector('.js-pull-down-anchor').addEventListener('mouseleave', (e) => {
        element.querySelector('.js-pull-down-menu').style.display = 'none';
      });
    }
  }

  addEventListenerPullDownMenu();
});
