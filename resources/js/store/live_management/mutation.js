import type from './type'
import JwtService from '@/common/jwt.service'

const mutations = {
  [type.GET_CATEGORY_MODALITY_WITH_PART] (state, data) {
    state.category_modality_with_part = data.category_modality_with_part;
  },
  [type.SET_PARTICIPANTS_COMPETITION_CATEGORY_MODALITY] (state, data) {
    state.participants_competition_category_modality = data.participants_competition_category_modality;
    state.category_id = data.category_id;
    state.modality_id = data.modality_id;
  },
  [type.GET_ALL_ROUND_HEATS] (state, data) {
    state.all_round_heats = data.all_round_heats;
  },
  [type.GET_ROUND_HEAT_DETAILS] (state, data) {
    state.round_heats = data.round_heats;
    state.heat_scores = data.heat_scores;
  },

  [type.GET_ALL_HOME_ROUND_HEATS] (state, data) {
    state.all_home_round_heats = data.all_round_heats;
  },
};
export default mutations;