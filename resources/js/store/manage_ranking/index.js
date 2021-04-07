import mutations from './mutation'
import actions from './action'
import getters from './getter'
import JwtService from "@/common/jwt.service"

const defaultState = {
  all_category_modality: [],
  all_ranking_data: [],
};

export default {
  state: defaultState,
  getters,
  actions,
  mutations,
};