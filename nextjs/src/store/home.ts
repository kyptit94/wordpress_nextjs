import { createSlice, PayloadAction } from '@reduxjs/toolkit';

interface cardRegister {
    title_left: string;
    description_left: string;
    title_right: string;
    description_right: string;
}

interface homeState {
    cardRegister: cardRegister;
}

const initialState: homeState = {
    cardRegister: {
        title_left: `Entreprises`,
        description_left: `Notre spécificité :
Un large éventail de solutions basées sur une double expertise des solutions libres et propriétaires`,
        title_right: `Candidats`,
        description_right: `Contribuer à l'acquisition des compétences qui vous permettront d'atteindre
vos ambitions.`
    }
};

const homeSlice = createSlice({
    name: 'home',
    initialState,
    reducers: {
        setCardRegister(state, action: PayloadAction<cardRegister>) {
            state.cardRegister = action.payload;
        }
    }
});

export const { setCardRegister } = homeSlice.actions;
export type { homeState };
export default homeSlice.reducer;