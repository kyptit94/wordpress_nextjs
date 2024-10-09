// store/store.ts
import { configureStore } from '@reduxjs/toolkit';
import homeSlice from './home';
import { useSelector, TypedUseSelectorHook } from 'react-redux';
export type RootState = ReturnType<typeof store.getState>;
export const useTypedSelector: TypedUseSelectorHook<RootState> = useSelector;

const store = configureStore({
    reducer: {
        home: homeSlice
    }
});

export default store;