import store from '../store'

export default [
    // {
    //     path: '/',
    //     meta: {
    //         // authRequired: true,
    //     },
    //     name: 'home',
    //     component: () => import('../contains/dashboard/home'),
    // },
    {
        path: '/login',
        name: 'login',
        component: () => import('../contains/auth/login'),
        meta: {
            beforeResolve(routeTo, routeFrom, next) {
                // If the user is already logged in
                if (store.getters['isAuthenticated']) {
                    // Redirect to the home page instead
                    next({ name: 'Admin' })
                } else {
                    // Continue to the login page
                    next()
                }
            },
        },
    },
    {
        path: '/register',
        name: 'register',
        component: () => import('../contains/auth/register'),
        meta: {
            beforeResolve(routeTo, routeFrom, next) {
                // If the user is already logged in
                if (store.getters['isAuthenticated']) {
                    // Redirect to the home page instead
                    next({ name: 'Admin' })
                } else {
                    // Continue to the login page
                    next()
                }
            },
        },
    },
    {
        path: '/forgot-password',
        name: 'forgot-password',
        component: () => import('../contains/auth/forgot-password'),
        meta: {
            beforeResolve(routeTo, routeFrom, next) {
                // If the user is already logged in
                if (store.getters['isAuthenticated']) {
                    // Redirect to the home page instead
                    next({ name: 'Admin' })
                } else {
                    // Continue to the login page
                    next()
                }
            },
        },  
    },
    {
        path: '/logout',
        name: 'logout',
        meta: {
            authRequired: true,
            beforeResolve(routeTo, routeFrom, next) {
                store.dispatch('logout')
                const authRequiredOnPreviousRoute = routeFrom.matched.some(
                    (route) => route.push('/login')
                )
                // Navigate back to previous page, or home as a fallback
                next(authRequiredOnPreviousRoute ? { name: 'home' } : { ...routeFrom })
            },
        },
    },

    {
        path: '/admin',
        name: 'Admin',
        component: () => import('../contains/admin/dashboard'),
        meta: {
            authRequired: true,
        },
    },
    {
        path: '/admin/users',
        name: 'Users',
        component: () => import('../contains/admin/user/users'),
        meta: {
            authRequired: true,
        },
    },
    {
        path: '/admin/user/create',
        name: 'UserCreate',
        component: () => import('../contains/admin/user/user-create'),
        meta: {
            authRequired: true,
        },
    },
    {
        path: '/admin/user/edit/:userId',
        name: 'UserEdit',
        component: () => import('../contains/admin/user/user-edit'),
        meta: {
            authRequired: true,
        },
    },

    // {
    //     path: '/admin/competitions',
    //     name: 'Competitions',
    //     component: () => import('../contains/admin/competition/competitions'),
    //     meta: {
    //         authRequired: true,
    //     },
    // },
    // {
    //     path: '/admin/competition/create',
    //     name: 'CompetitionCreate',
    //     component: () => import('../contains/admin/competition/competition-create'),
    //     meta: {
    //         authRequired: true,
    //     },
    // },
    // {
    //     path: '/admin/competition/edit',
    //     name: 'competitionEdit',
    //     component: () => import('../contains/admin/competition/competition-edit'),
    //     meta: {
    //         authRequired: true,
    //     },
    // },
]