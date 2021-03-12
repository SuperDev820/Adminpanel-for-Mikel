import Vue from 'vue';
import Vuex from 'vuex';
import authModule from './auth';
import layoutModule from './layout';
import competitionModule from './competition';
import competitionTypeModule from './competition_type';
import userModule from './user';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    auth: authModule,
    layout: layoutModule,
    competition: competitionModule,
    competitionType: competitionTypeModule,
    user: userModule,
  },
});