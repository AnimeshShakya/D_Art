"use client"

import { createContext, useContext, useState, useCallback } from "react"

interface CartItem {
  id: number
  title: string
  price: number
  imageUrl: string
  quantity: number
}

interface CartContextType {
  items: CartItem[]
  addItem: (item: CartItem) => void
  removeItem: (id: number) => void
  updateQuantity: (id: number, quantity: number) => void
  clearCart: () => void
  showNotification: (message: string) => void
  notification: string | null
}

const CartContext = createContext<CartContextType | undefined>(undefined)

export function CartProvider({ children }: { children: React.ReactNode }) {
  const [items, setItems] = useState<CartItem[]>([])
  const [notification, setNotification] = useState<string | null>(null)

  const addItem = useCallback((newItem: CartItem) => {
    setItems(currentItems => {
      const existingItem = currentItems.find(item => item.id === newItem.id)
      if (existingItem) {
        return currentItems.map(item =>
          item.id === newItem.id
            ? { ...item, quantity: item.quantity + newItem.quantity }
            : item
        )
      }
      return [...currentItems, newItem]
    })
  }, [])

  const removeItem = useCallback((id: number) => {
    setItems(currentItems => currentItems.filter(item => item.id !== id))
  }, [])

  const updateQuantity = useCallback((id: number, quantity: number) => {
    setItems(currentItems =>
      currentItems.map(item =>
        item.id === id ? { ...item, quantity } : item
      )
    )
  }, [])

  const clearCart = useCallback(() => {
    setItems([])
  }, [])

  const showNotification = useCallback((message: string) => {
    setNotification(message)
    setTimeout(() => setNotification(null), 3000)
  }, [])

  return (
    <CartContext.Provider
      value={{
        items,
        addItem,
        removeItem,
        updateQuantity,
        clearCart,
        showNotification,
        notification
      }}
    >
      {children}
      {/* Notification Toast */}
      {notification && (
        <div className="fixed bottom-4 right-4 bg-gradient-to-r from-purple-900 to-blue-900 text-white px-6 py-3 rounded-lg shadow-lg z-50 animate-fade-in-up">
          {notification}
        </div>
      )}
    </CartContext.Provider>
  )
}

export function useCart() {
  const context = useContext(CartContext)
  if (context === undefined) {
    throw new Error("useCart must be used within a CartProvider")
  }
  return context
}
