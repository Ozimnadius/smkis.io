<header class="header">
  <div class="header__logo">
    <a href="/">
      <img src="/upload/images/logo.webp"
           width="56"
           height="46"
           alt="Logo"
           loading="lazy"
      >
    </a>
  </div>
  <div class="header__menu">
    <? component('menu', [], 'src/data/menu.json'); ?>
  </div>
  <div class="header__icons">
    <div class="header__city">
      <button type="button"
              class="icon-stroke"
              data-event="click.selectCity"
      >
        <svg width="32"
             height="32"
             viewBox="0 0 32 32"
             fill="none"
             xmlns="http://www.w3.org/2000/svg"
        >
          <path fill-rule="evenodd"
                clip-rule="evenodd"
                d="M19.3333 14.0007C19.3333 12.159 17.841 10.6667 16.0007 10.6667C14.159 10.6667 12.6667 12.159 12.6667 14.0007C12.6667 15.841 14.159 17.3333 16.0007 17.3333C17.841 17.3333 19.3333 15.841 19.3333 14.0007Z"
                stroke="#15182A"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
          />
          <path fill-rule="evenodd"
                clip-rule="evenodd"
                d="M15.9993 28C14.4014 28 6 21.1978 6 14.0844C6 8.51552 10.4761 4 15.9993 4C21.5226 4 26 8.51552 26 14.0844C26 21.1978 17.5973 28 15.9993 28Z"
                stroke="#15182A"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
          />
        </svg>
      </button>
    </div>
    <div class="header__search">
      <button type="button"
              class="icon-fill"
              data-event="click.openSearch"
      >
        <svg width="32"
             height="32"
             viewBox="0 0 32 32"
             fill="none"
             xmlns="http://www.w3.org/2000/svg"
        >
          <path fill-rule="evenodd"
                clip-rule="evenodd"
                d="M15.4122 4.28557C9.2666 4.28557 4.2846 9.26757 4.2846 15.4132C4.2846 21.5588 9.2666 26.5408 15.4122 26.5408C21.5578 26.5408 26.5398 21.5588 26.5398 15.4132C26.5398 9.26757 21.5578 4.28557 15.4122 4.28557ZM2.57031 15.4132C2.57031 8.3208 8.31982 2.57129 15.4122 2.57129C22.5046 2.57129 28.2541 8.3208 28.2541 15.4132C28.2541 18.8091 26.936 21.8971 24.7834 24.1936L29.0518 28.4508C29.387 28.7851 29.3877 29.3279 29.0534 29.663C28.7191 29.9982 28.1764 29.9989 27.8412 29.6646L23.5299 25.3644C21.3175 27.1713 18.4914 28.2551 15.4122 28.2551C8.31982 28.2551 2.57031 22.5056 2.57031 15.4132Z"
                fill="currentColor"
          />
        </svg>
      </button>
    </div>
  </div>
  <div class="header__registration">
    <a href="/registration/"
       class="btn btn--small btn--border"
    >
      Регистрация устройства
    </a>
  </div>
  <div class="header__nav">
    <button type="button"
            class="icon-fill"
    >
      <svg width="32"
           height="32"
           viewBox="0 0 32 32"
           fill="none"
           xmlns="http://www.w3.org/2000/svg"
      >
        <path d="M5.52344 15.6669C5.52344 15.1147 6.02598 14.6669 6.64589 14.6669H25.3534C25.9733 14.6669 26.4758 15.1147 26.4758 15.6669C26.4758 16.2192 25.9733 16.6669 25.3534 16.6669H6.64589C6.02597 16.6669 5.52344 16.2192 5.52344 15.6669Z"
              fill="#15182A"
        />
        <path d="M5.52344 7.85742C5.52344 7.30514 6.02598 6.85742 6.64589 6.85742H25.3534C25.9733 6.85742 26.4758 7.30514 26.4758 7.85742C26.4758 8.40971 25.9733 8.85742 25.3534 8.85742H6.64589C6.02597 8.85742 5.52344 8.40971 5.52344 7.85742Z"
              fill="#15182A"
        />
        <path d="M5.52344 23.4765C5.52344 22.9242 6.02598 22.4765 6.64589 22.4765H25.3534C25.9733 22.4765 26.4758 22.9242 26.4758 23.4765C26.4758 24.0288 25.9733 24.4765 25.3534 24.4765H6.64589C6.02597 24.4765 5.52344 24.0288 5.52344 23.4765Z"
              fill="#15182A"
        />
      </svg>
    </button>
  </div>
</header>
