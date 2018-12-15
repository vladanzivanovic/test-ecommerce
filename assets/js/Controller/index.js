import SignInController from './SignInController';
import SignUpController from './SignUpController';

let routes = [
    {
        name: 'sign-in',
        path: '/sign-in',
        controller: SignInController,
    },
    {
        name: 'sign-up',
        path: '/sign-up',
        controller: SignUpController,
    },
];

$(document).ready(() => {
    let route = matchRoute();
    if (route) {
        let controller = new route.controller();
        controller.init();
    }
});

let matchRoute = () => {
    for(let i in routes) {
        let currentUrl = location.pathname.split('/');
        let route = routes[i];
        let path = route.path.split('/');

        for (let p in path) {
            let item = path[p];

            if (item.indexOf(':') > -1) {
                currentUrl.splice(p, 1, item);
            }
        }

        if (currentUrl.join('/') == path.join('/')) {
            return route;
        }
    }
}