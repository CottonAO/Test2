document.addEventListener("DOMContentLoaded", ()=>{
    const t = document.getElementById("loginInput")
      , s = document.getElementById("passwordInput");
    var e = document.getElementById("loginForm");
    const d = document.getElementById("loaderSubmit")
      , o = document.getElementById("iconSubmitButton")
      , n = (e && e.addEventListener("submit", e=>{
        e.preventDefault();
        const n = [];
        e = [t, s];
        e.forEach((e,t)=>{
            "" === e.value.trim() ? e.classList.add("error-input") : (e.classList.remove("error-input"),
            n.push(!0))
        }
        ),
        n.length === e.length && (o.classList.toggle("d-none"),
        d.classList.toggle("d-none"),
        setTimeout(()=>{
            o.classList.toggle("d-none"),
            d.classList.toggle("d-none"),
            window.location.href = "/my-profile"
        }
        , 2e3))
    }
    ),
    document.getElementById("showPassword"))
      , a = (n && n.addEventListener("click", ()=>{
        n.classList.toggle("visible"),
        "password" === s.getAttribute("type") ? s.setAttribute("type", "text") : s.setAttribute("type", "password")
    }
    ),
    Array.from(document.querySelectorAll(".input-variant")))
      , l = document.getElementById("submitAnswer")
      , i = (a && a.forEach(e=>{
        e.addEventListener("input", ()=>{
            a.find(e=>!0 === e.checked) ? (l.disabled = !1,
            l.classList.remove("disabled"),
            l.classList.add("btn-primary")) : (l.disabled = !0,
            l.classList.remove("btn-primary"),
            l.classList.add("disabled"))
        }
        )
    }
    ),
    document.getElementById("toggleMenuButton"))
      , r = document.getElementById("navigationPanel")
      , c = (i && i.addEventListener("click", ()=>{
        i.classList.toggle("rotate"),
        r.classList.toggle("hiddenMenu")
    }
    ),
    document.getElementById("mobileMenuButton"))
      , m = document.getElementById("mobileMenuList");
    c && c.addEventListener("click", ()=>{
        c.classList.toggle("menu-active"),
        m.classList.toggle("header-mobile-active")
    }
    );
    e = document.querySelectorAll(".nav-link");
    e && e.forEach(e=>{
        e.getAttribute("href") === location.pathname && e.classList.add("nav-link-active")
    }
    );
    const u = document.getElementById("showPasswordConfirm");
    var e = document.getElementById("changePassword")
      , g = document.getElementById("changePasswordConfirm")
      , y = document.getElementById("changePasswordForm");
    const v = document.querySelector(".validation-text");
    document.getElementById("changePasswordField"),
    document.getElementById("confirmPasswordField"),
    document.getElementById("dialogChangePasswordForm"),
    document.getElementById("changePasswordBtn");
    if (y) {
        const E = [e, g];
        u && u.addEventListener("click", ()=>{
            u.classList.toggle("visible"),
            E.forEach(e=>{
                "password" === e.getAttribute("type") ? e.setAttribute("type", "text") : e.setAttribute("type", "password")
            }
            )
        }
        ),
        y.addEventListener("submit", e=>{
            e.preventDefault(),
            "" === E[0].value.trim() && "" === E[1].value.trim() ? E[1].classList.add("error-input") : (E[1].classList.remove("error-input"),
            E[0].value !== E[1].value && (E[1].classList.add("error-input"),
            v.textContent = "Пароли не совпадают"))
        }
        )
    }
}
);
