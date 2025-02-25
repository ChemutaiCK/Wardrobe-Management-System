import { defineStore } from 'pinia';
import api from '../api';

export const useAuthStore = defineStore('auth', {
  state: () => ({
    user: null,
    token: localStorage.getItem('token') || '',
  }),
  
  actions: {
    async login(credentials) {
      const response = await api.post('/login', credentials);
      this.token = response.data.token;
      localStorage.setItem('token', this.token);
    },

    logout() {
      this.token = '';
      localStorage.removeItem('token');
    }
  }
});
